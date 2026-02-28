<?php
/**
 * Plugin Name: Q4 Gems Website Setup
 * Plugin URI:  https://q4gems.com
 * Description: Automatically creates the Q4 Gems website pages (Home, Services, Pricing, About) with custom page templates. Run once on activation, or use WP-CLI / the admin action to re-run.
 * Version:     1.1.0
 * Author:      Q4 GLOBAL Enterprise Managed Solutions Inc.
 * License:     GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// ============================================================
//  PAGE DEFINITIONS
// ============================================================

function aiam_get_page_definitions() {
    return [
        'home'     => [
            'title'     => 'Home',
            'slug'      => 'home',
            'template'  => 'page-aiam-home.php',
            'set_front' => true,
        ],
        'services' => [
            'title'    => 'Services',
            'slug'     => 'services',
            'template' => 'page-aiam-services.php',
        ],
        'pricing'  => [
            'title'    => 'Pricing',
            'slug'     => 'pricing',
            'template' => 'page-aiam-pricing.php',
        ],
        'about'    => [
            'title'    => 'About Us',
            'slug'     => 'about',
            'template' => 'page-aiam-about.php',
        ],
    ];
}

// ============================================================
//  PAGE CREATION
// ============================================================

function aiam_create_pages() {
    $pages   = aiam_get_page_definitions();
    $created = [];
    $skipped = [];

    foreach ( $pages as $key => $page ) {

        // Check if slug already exists
        $existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
        if ( $existing ) {
            $skipped[] = $page['title'];

            // Still update template in case it was wrong
            if ( ! empty( $page['template'] ) ) {
                update_post_meta( $existing->ID, '_wp_page_template', $page['template'] );
            }
            // Update front page setting if needed
            if ( ! empty( $page['set_front'] ) ) {
                update_option( 'page_on_front', $existing->ID );
                update_option( 'show_on_front', 'page' );
            }
            continue;
        }

        $post_data = [
            'post_title'   => $page['title'],
            'post_name'    => $page['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_author'  => 1,
            'post_content' => '',
        ];

        $post_id = wp_insert_post( $post_data );

        if ( is_wp_error( $post_id ) ) {
            continue;
        }

        // Assign custom template
        if ( ! empty( $page['template'] ) ) {
            update_post_meta( $post_id, '_wp_page_template', $page['template'] );
        }

        // Set as static front page
        if ( ! empty( $page['set_front'] ) ) {
            update_option( 'page_on_front', $post_id );
            update_option( 'show_on_front', 'page' );
        }

        $created[] = $page['title'];
    }

    return [ 'created' => $created, 'skipped' => $skipped ];
}

// ============================================================
//  NAVIGATION MENU CREATION
// ============================================================

function aiam_create_navigation_menu() {
    $menu_name     = 'Q4 Gems Primary Menu';
    $menu_location = 'aiam-primary';

    // Delete old menu if exists
    $existing = wp_get_nav_menu_object( $menu_name );
    if ( $existing ) {
        wp_delete_nav_menu( $existing->term_id );
    }

    $menu_id = wp_create_nav_menu( $menu_name );

    if ( is_wp_error( $menu_id ) ) {
        return;
    }

    $menu_items = [
        ['Services',  'services'],
        ['Pricing',   'pricing'],
        ['About',     'about'],
    ];

    foreach ( $menu_items as $item ) {
        $page = get_page_by_path( $item[1], OBJECT, 'page' );
        if ( ! $page ) {
            continue;
        }
        wp_update_nav_menu_item( $menu_id, 0, [
            'menu-item-object-id' => $page->ID,
            'menu-item-object'    => 'page',
            'menu-item-type'      => 'post_type',
            'menu-item-status'    => 'publish',
            'menu-item-title'     => $item[0],
        ] );
    }

    // Assign menu to location
    $locations = get_theme_mod( 'nav_menu_locations', [] );
    $locations[ $menu_location ] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
}

// ============================================================
//  SITE OPTIONS
// ============================================================

function aiam_configure_site_options() {
    // Blog page (create a placeholder if needed)
    $blog_page = get_page_by_path( 'blog', OBJECT, 'page' );
    if ( ! $blog_page ) {
        $blog_id = wp_insert_post([
            'post_title'   => 'Blog',
            'post_name'    => 'blog',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ]);
        if ( ! is_wp_error( $blog_id ) ) {
            update_option( 'page_for_posts', $blog_id );
        }
    } else {
        update_option( 'page_for_posts', $blog_page->ID );
    }

    // Site tagline
    if ( get_option('blogdescription') === 'Just another WordPress site' || empty( get_option('blogdescription') ) ) {
        update_option( 'blogdescription', 'Enterprise IT Solutions — Toronto\'s Trusted Technology Partner Since 1999' );
    }

    // Permalink structure
    if ( empty( get_option('permalink_structure') ) ) {
        update_option( 'permalink_structure', '/%postname%/' );
    }

    // Disable comments on pages by default
    update_option( 'default_comment_status', 'closed' );

    // Disable pingbacks
    update_option( 'default_ping_status', 'closed' );

    // Time zone
    if ( empty( get_option('timezone_string') ) ) {
        update_option( 'timezone_string', 'America/Toronto' );
    }

    // Uploads year/month organise
    update_option( 'uploads_use_yearmonth_folders', 1 );
}

// ============================================================
//  PERFORMANCE OPTIMISATIONS (LiteSpeed Cache)
// ============================================================

function aiam_configure_performance() {
    // Ensure LiteSpeed Cache is configured for optimal performance
    // These options only set defaults; they don't override existing admin settings

    $litespeed_defaults = [
        'cache-browser'          => true,
        'cache-mobile'           => true,
        'optm-css_min'           => true,
        'optm-js_min'            => true,
        'optm-html_min'          => true,
        'optm-img_lazy'          => true,
        'optm-qs_rm'             => true,   // Remove query strings
        'optm-img_webp'          => true,
    ];

    foreach ( $litespeed_defaults as $key => $value ) {
        $option_key = 'litespeed.' . $key;
        if ( false === get_option( $option_key ) ) {
            update_option( $option_key, $value );
        }
    }
}

// ============================================================
//  PLUGIN ACTIVATION HOOK
// ============================================================

register_activation_hook( __FILE__, function () {
    aiam_create_pages();
    aiam_create_navigation_menu();
    aiam_configure_site_options();
    aiam_configure_performance();

    // Flush rewrite rules
    flush_rewrite_rules();

    // Mark setup as complete
    update_option( 'aiam_setup_complete', true );
    update_option( 'aiam_setup_version', '1.0.0' );
} );

// ============================================================
//  ADMIN PAGE — RE-RUN SETUP
// ============================================================

add_action( 'admin_menu', function () {
    add_management_page(
        'Q4 Gems Website Setup',
        'Q4 Gems Setup',
        'manage_options',
        'aiam-setup',
        'aiam_admin_setup_page'
    );
} );

function aiam_admin_setup_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Unauthorised' );
    }

    $message = '';

    if ( isset( $_POST['aiam_run_setup'] ) && check_admin_referer( 'aiam_setup_action' ) ) {
        $result = aiam_create_pages();
        aiam_create_navigation_menu();
        aiam_configure_site_options();
        flush_rewrite_rules();

        $message = '<div class="notice notice-success"><p>';
        if ( $result['created'] ) {
            $message .= '<strong>Created:</strong> ' . esc_html( implode( ', ', $result['created'] ) ) . '<br>';
        }
        if ( $result['skipped'] ) {
            $message .= '<strong>Already existed (templates updated):</strong> ' . esc_html( implode( ', ', $result['skipped'] ) );
        }
        $message .= '</p></div>';
    }

    $pages = aiam_get_page_definitions();
    ?>
    <div class="wrap">
        <h1>Q4 Gems Website Setup</h1>
        <?php echo $message; ?>

        <div style="background:#fff;padding:2rem;max-width:700px;border-radius:4px;border:1px solid #ccc;margin-top:1rem">
            <h2 style="margin-top:0">Pages to be created / updated</h2>
            <table class="wp-list-table widefat fixed striped" style="margin-bottom:1.5rem">
                <thead>
                    <tr>
                        <th>Page Title</th>
                        <th>Slug</th>
                        <th>Template</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ( $pages as $page ) :
                        $existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
                        $status   = $existing ? '<span style="color:green">✓ Exists</span>' : '<span style="color:orange">Not yet created</span>';
                    ?>
                    <tr>
                        <td><?php echo esc_html( $page['title'] ); ?></td>
                        <td><code>/<?php echo esc_html( $page['slug'] ); ?>/</code></td>
                        <td><code><?php echo esc_html( $page['template'] ); ?></code></td>
                        <td><?php echo $status; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form method="post">
                <?php wp_nonce_field( 'aiam_setup_action' ); ?>
                <p>
                    <button type="submit" name="aiam_run_setup" class="button button-primary button-large">
                        🚀 Run Q4 Gems Setup / Refresh Pages
                    </button>
                </p>
                <p style="color:#666;font-size:13px">
                    This will create any missing pages and update page templates on existing ones. It will not delete any content.
                </p>
            </form>
        </div>

        <div style="background:#fff;padding:2rem;max-width:700px;border-radius:4px;border:1px solid #ccc;margin-top:1rem">
            <h2 style="margin-top:0">Quick Links</h2>
            <p>
                <?php foreach ( $pages as $page ) :
                    $existing = get_page_by_path( $page['slug'], OBJECT, 'page' );
                    if ( $existing ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $existing->ID ) ); ?>" target="_blank" class="button button-secondary" style="margin:4px">
                        View: <?php echo esc_html( $page['title'] ); ?> →
                    </a>
                    <?php endif; endforeach; ?>
            </p>
        </div>
    </div>
    <?php
}

// ============================================================
//  AUTO-SETUP ON FIRST LOAD (if pages don't exist yet)
// ============================================================

add_action( 'init', function () {
    if ( get_option( 'aiam_setup_complete' ) ) {
        return;
    }
    // Only run if this is NOT an AJAX or REST request
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
        return;
    }
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        return;
    }
    aiam_create_pages();
    aiam_configure_site_options();
    flush_rewrite_rules();
    update_option( 'aiam_setup_complete', true );
} );

// ============================================================
//  SECURITY HEADERS (added via WP — minimal, non-duplicating)
// ============================================================

add_action( 'send_headers', function () {
    // Only add if not already set by server
    if ( ! headers_sent() ) {
        header( 'X-Content-Type-Options: nosniff' );
        header( 'X-Frame-Options: SAMEORIGIN' );
        header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    }
} );

// ============================================================
//  PERFORMANCE: PRELOAD KEY ASSETS
// ============================================================

add_action( 'wp_head', function () {
    // Only on AIAM custom pages
    $template = get_page_template_slug();
    if ( strpos( $template, 'aiam-' ) === false ) {
        return;
    }
    // Preload Google Fonts stylesheet
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">' . "\n";
    echo '<link rel="preload" as="image" href="' . esc_url( content_url( 'uploads/2023/03/q4g-white.png' ) ) . '">' . "\n";
}, 2 );
