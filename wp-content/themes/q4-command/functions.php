<?php

require_once get_template_directory() . '/inc/site-content.php';


if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

if ( ! function_exists( 'q4_command_render_contact_form' ) ) {
    function q4_command_render_contact_form( $args = array() ) {
        $GLOBALS['q4_command_contact_form_args'] = $args;
        locate_template( array( 'template-parts/contact-form.php' ), true, false );
        unset( $GLOBALS['q4_command_contact_form_args'] );
    }
}

function q4_command_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'custom-logo', array( 'height' => 72, 'width' => 180, 'flex-height' => true, 'flex-width' => true ) );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'q4-command' ),
            'footer'  => __( 'Footer Menu', 'q4-command' ),
        )
    );

    add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'q4_command_setup' );

function q4_command_enqueue_assets() {
    $theme = wp_get_theme();
    $base  = get_template_directory();

    wp_enqueue_style( 'q4-command-style', get_stylesheet_uri(), array(), $theme->get( 'Version' ) );
    wp_enqueue_style(
        'q4-command-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array( 'q4-command-style' ),
        file_exists( $base . '/assets/css/main.css' ) ? (string) filemtime( $base . '/assets/css/main.css' ) : $theme->get( 'Version' )
    );

    wp_enqueue_script(
        'q4-command-site',
        get_template_directory_uri() . '/assets/js/site.js',
        array(),
        file_exists( $base . '/assets/js/site.js' ) ? (string) filemtime( $base . '/assets/js/site.js' ) : $theme->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'q4_command_enqueue_assets' );

function q4_command_brand_markup() {
    $logo = get_custom_logo();

    if ( $logo ) {
        return $logo;
    }

    $brand_url = content_url( '/uploads/2023/03/desktoplogo.webp' );

    return sprintf(
        '<a class="brand-mark" href="%1$s" aria-label="%2$s"><img src="%3$s" alt="%2$s" /></a>',
        esc_url( home_url( '/' ) ),
        esc_attr__( 'Q4 GEMS', 'q4-command' ),
        esc_url( $brand_url )
    );
}

function q4_command_build_nav_link( $label, $url, $is_current = false ) {
    return array(
        'label'      => $label,
        'url'        => $url,
        'is_current' => (bool) $is_current,
    );
}

function q4_command_utility_nav_targets() {
    return array( 'blog', 'careers', 'faq', 'managed-services', 'privacy-policy' );
}

function q4_command_is_utility_nav_item( $item ) {
    $targets = q4_command_utility_nav_targets();
    $title   = is_array( $item ) ? $item['label'] : $item->title;
    $url     = is_array( $item ) ? $item['url'] : $item->url;

    if ( in_array( sanitize_title( wp_strip_all_tags( $title ) ), $targets, true ) ) {
        return true;
    }

    $path = trim( (string) wp_parse_url( $url, PHP_URL_PATH ), '/' );
    if ( '' === $path ) {
        return false;
    }

    foreach ( $targets as $target ) {
        if ( $path === $target ) {
            return true;
        }

        $suffix = '/' . $target;
        if ( strlen( $path ) > strlen( $target ) && substr( $path, -strlen( $suffix ) ) === $suffix ) {
            return true;
        }
    }

    return false;
}

function q4_command_default_navigation_groups() {
    $privacy_url = function_exists( 'get_privacy_policy_url' ) ? get_privacy_policy_url() : home_url( '/privacy-policy/' );

    return array(
        'primary' => array(
            q4_command_build_nav_link( __( 'Home', 'q4-command' ), home_url( '/' ) ),
            q4_command_build_nav_link( __( 'Services', 'q4-command' ), home_url( '/services/' ) ),
            q4_command_build_nav_link( __( 'About', 'q4-command' ), home_url( '/about-us/' ) ),
            q4_command_build_nav_link( __( 'Contact', 'q4-command' ), home_url( '/contact-us/' ) ),
        ),
        'utility' => array(
            q4_command_build_nav_link( __( 'Blog', 'q4-command' ), home_url( '/blog/' ) ),
            q4_command_build_nav_link( __( 'Careers', 'q4-command' ), home_url( '/careers/' ) ),
            q4_command_build_nav_link( __( 'FAQ', 'q4-command' ), home_url( '/faq/' ) ),
            q4_command_build_nav_link( __( 'Managed Services', 'q4-command' ), home_url( '/managed-services/' ) ),
            q4_command_build_nav_link( __( 'Privacy Policy', 'q4-command' ), $privacy_url ),
        ),
    );
}

function q4_command_get_navigation_groups() {
    $groups    = array(
        'primary' => array(),
        'utility' => array(),
    );
    $defaults  = q4_command_default_navigation_groups();
    $locations = get_nav_menu_locations();

    if ( ! empty( $locations['primary'] ) ) {
        $items = wp_get_nav_menu_items( $locations['primary'] );

        if ( ! empty( $items ) ) {
            foreach ( $items as $item ) {
                if ( (int) $item->menu_item_parent !== 0 ) {
                    continue;
                }

                $link = q4_command_build_nav_link(
                    $item->title,
                    $item->url,
                    ! empty( $item->current ) || ! empty( $item->current_item_ancestor ) || ! empty( $item->current_item_parent )
                );

                if ( q4_command_is_utility_nav_item( $item ) ) {
                    $groups['utility'][] = $link;
                    continue;
                }

                $groups['primary'][] = $link;
            }
        }
    }

    if ( empty( $groups['primary'] ) ) {
        $groups['primary'] = $defaults['primary'];
    }

    if ( empty( $groups['utility'] ) ) {
        $groups['utility'] = $defaults['utility'];
    }

    return $groups;
}

function q4_command_render_navigation_links( $items, $list_class = 'menu-list' ) {
    if ( empty( $items ) || ! is_array( $items ) ) {
        return;
    }

    printf( '<ul class="%s">', esc_attr( $list_class ) );

    foreach ( $items as $item ) {
        $classes = ! empty( $item['is_current'] ) ? ' class="current-menu-item"' : '';

        printf(
            '<li%1$s><a href="%2$s">%3$s</a></li>',
            $classes,
            esc_url( $item['url'] ),
            esc_html( $item['label'] )
        );
    }

    echo '</ul>';
}

function q4_command_navigation_fallback() {
    $groups = q4_command_default_navigation_groups();
    q4_command_render_navigation_links( $groups['primary'] );
}

function q4_command_clean_legacy_markup( $content ) {
    $patterns = array(
        '#<style\b[^>]*>.*?</style>#is',
        '#<span[^>]*>#i',
        '#</span>#i',
        '#<p>\s*(?:&nbsp;|\s|<br\s*/?>)*</p>#i',
    );

    $replacements = array( '', '', '', '' );

    $content = preg_replace( $patterns, $replacements, $content );
    $content = str_replace( '&nbsp;', ' ', $content );
    $content = preg_replace( '#\s{2,}#', ' ', $content );

    return $content;
}

function q4_command_filter_content( $content ) {
    if ( is_admin() ) {
        return $content;
    }

    return q4_command_clean_legacy_markup( $content );
}
add_filter( 'the_content', 'q4_command_filter_content', 5 );

function q4_command_plain_excerpt( $post = null, $length = 28 ) {
    $post = get_post( $post );

    if ( ! $post ) {
        return '';
    }

    if ( has_excerpt( $post ) ) {
        return wp_trim_words( wp_strip_all_tags( $post->post_excerpt ), $length );
    }

    return wp_trim_words( wp_strip_all_tags( q4_command_clean_legacy_markup( $post->post_content ) ), $length );
}

function q4_command_read_time( $post = null ) {
    $post = get_post( $post );

    if ( ! $post ) {
        return 1;
    }

    $word_count = str_word_count( wp_strip_all_tags( q4_command_clean_legacy_markup( $post->post_content ) ) );
    return max( 1, (int) ceil( $word_count / 220 ) );
}

function q4_command_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }

    if ( is_page() && ! is_front_page() ) {
        $classes[] = 'is-custom-page';
    }

    return $classes;
}
add_filter( 'body_class', 'q4_command_body_classes' );

function q4_command_contact_notice() {
    $status = isset( $_GET['contact'] ) ? sanitize_key( wp_unslash( $_GET['contact'] ) ) : '';

    $messages = array(
        'success' => array(
            'class'   => 'is-success',
            'message' => __( 'Thanks. Your request has been sent and Q4 GEMS can follow up shortly.', 'q4-command' ),
        ),
        'invalid' => array(
            'class'   => 'is-error',
            'message' => __( 'The form session expired. Please refresh the page and try again.', 'q4-command' ),
        ),
        'missing' => array(
            'class'   => 'is-error',
            'message' => __( 'Please complete the required fields before sending your request.', 'q4-command' ),
        ),
        'error'   => array(
            'class'   => 'is-error',
            'message' => __( 'The message could not be sent right now. Please email Q4 GEMS directly or try again shortly.', 'q4-command' ),
        ),
    );

    return isset( $messages[ $status ] ) ? $messages[ $status ] : null;
}

function q4_command_handle_contact_form() {
    $redirect = wp_get_referer() ? wp_get_referer() : home_url( '/contact-us/' );
    $redirect = remove_query_arg( 'contact', $redirect );

    if ( ! isset( $_POST['q4_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['q4_contact_nonce'] ) ), 'q4_contact_form' ) ) {
        wp_safe_redirect( add_query_arg( 'contact', 'invalid', $redirect ) );
        exit;
    }

    if ( ! empty( $_POST['company_site'] ) ) {
        wp_safe_redirect( add_query_arg( 'contact', 'success', $redirect ) );
        exit;
    }

    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
    $topic   = isset( $_POST['topic'] ) ? sanitize_text_field( wp_unslash( $_POST['topic'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( '' === $name || '' === $message || ! is_email( $email ) ) {
        wp_safe_redirect( add_query_arg( 'contact', 'missing', $redirect ) );
        exit;
    }

    $subject = sprintf( __( 'New Q4 GEMS website enquiry from %s', 'q4-command' ), $name );
    $body    = array(
        'Name: ' . $name,
        'Email: ' . $email,
        'Company: ' . ( $company ? $company : __( 'Not provided', 'q4-command' ) ),
        'Topic: ' . ( $topic ? $topic : __( 'General enquiry', 'q4-command' ) ),
        '',
        'Message:',
        $message,
    );

    $headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
    $sent    = wp_mail( get_option( 'admin_email' ), $subject, implode( "\n", $body ), $headers );

    wp_safe_redirect( add_query_arg( 'contact', $sent ? 'success' : 'error', $redirect ) );
    exit;
}
add_action( 'admin_post_nopriv_q4_contact_form', 'q4_command_handle_contact_form' );
add_action( 'admin_post_q4_contact_form', 'q4_command_handle_contact_form' );

function q4_command_print_schema() {
    if ( ! is_front_page() ) {
        return;
    }

    $home = q4_command_home_content();

    $faq_entities = array();
    foreach ( $home['faq'] as $item ) {
        $faq_entities[] = array(
            '@type'          => 'Question',
            'name'           => $item['question'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $item['answer'],
            ),
        );
    }

    $schema = array(
        array(
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => 'Q4 GEMS',
            'url'      => home_url( '/' ),
            'logo'     => content_url( '/uploads/2023/03/q4g-white.png' ),
            'description' => $home['intro'],
        ),
        array(
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => $faq_entities,
        ),
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
}
add_action( 'wp_head', 'q4_command_print_schema', 30 );
