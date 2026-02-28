<?php
$home       = q4_command_home_content();
$navigation = q4_command_get_navigation_groups();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
<div class="site-shell">
    <header class="site-header" data-site-header>
        <div class="topline">
            <p><?php esc_html_e( 'Security-first managed IT services, cybersecurity, and Microsoft 365 support for Toronto teams.', 'q4-command' ); ?></p>
        </div>
        <div class="nav-wrap">
            <div class="brand"><?php echo q4_command_brand_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" data-menu-toggle>
                <span></span>
                <span></span>
                <span></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'q4-command' ); ?></span>
            </button>
            <nav class="primary-nav" id="primary-menu" data-menu-panel>
                <?php q4_command_render_navigation_links( $navigation['primary'] ); ?>
                <a class="button button--primary nav-cta" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Book consultation', 'q4-command' ); ?></a>
            </nav>
        </div>
    </header>
    <main id="content" class="site-main">
