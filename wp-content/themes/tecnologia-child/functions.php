<?php
/**
 * Tecnologia Child Theme — AIAM Technologies
 * Huntress-inspired design system with AIAM brand colors
 */

/* Enqueue parent + child styles */
function aiam_child_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        array( 'vamtam-front-all' )
    );
    wp_enqueue_style(
        'aiam-design-system',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        '1.0.0'
    );
    // Google Fonts — Inter
    wp_enqueue_style(
        'aiam-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'aiam_child_enqueue_styles', 12 );

/* Register navigation menus */
function aiam_register_menus() {
    register_nav_menus( array(
        'aiam-primary'  => __( 'AIAM Primary Navigation', 'tecnologia-child' ),
        'aiam-footer'   => __( 'AIAM Footer Navigation',  'tecnologia-child' ),
    ) );
}
add_action( 'after_setup_theme', 'aiam_register_menus' );

/* Disable emoji scripts (performance) */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* Remove query strings from static assets (performance) */
function aiam_remove_query_strings( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src',  'aiam_remove_query_strings', 9999 );
add_filter( 'script_loader_src', 'aiam_remove_query_strings', 9999 );

/* Preconnect to Google Fonts for performance */
function aiam_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => true,
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'aiam_resource_hints', 10, 2 );

/* Add custom body classes for AIAM pages */
function aiam_body_classes( $classes ) {
    $template = get_page_template_slug();
    if ( strpos( $template, 'aiam-' ) !== false ) {
        $classes[] = 'aiam-page';
        $classes[] = 'aiam-' . sanitize_html_class( basename( $template, '.php' ) );
    }
    return $classes;
}
add_filter( 'body_class', 'aiam_body_classes' );

/* Inline critical CSS for LCP performance */
function aiam_inline_critical_css() {
    $template = get_page_template_slug();
    if ( strpos( $template, 'aiam-' ) === false ) {
        return;
    }
    echo '<style id="aiam-critical">';
    echo 'body{margin:0;background:#08102A;color:#fff;font-family:Inter,system-ui,sans-serif;}';
    echo '#aiam-header{position:fixed;top:0;left:0;right:0;z-index:1000;background:rgba(8,16,42,.92);backdrop-filter:blur(16px);border-bottom:1px solid rgba(255,255,255,.06);}';
    echo '.aiam-hero{min-height:100vh;background:#08102A;}';
    echo '</style>';
}
add_action( 'wp_head', 'aiam_inline_critical_css', 1 );

/* Security: Remove WP version from head */
remove_action( 'wp_head', 'wp_generator' );

/* Security: Remove RSD link */
remove_action( 'wp_head', 'rsd_link' );

/* Security: Remove Windows Live Writer */
remove_action( 'wp_head', 'wlwmanifest_link' );
