<?php

require_once get_template_directory() . '/inc/site-content.php';

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

function q4_command_navigation_fallback() {
    $items = array(
        __( 'Home', 'q4-command' )     => home_url( '/' ),
        __( 'Services', 'q4-command' ) => home_url( '/services/' ),
        __( 'About', 'q4-command' )    => home_url( '/about-us/' ),
        __( 'Insights', 'q4-command' ) => home_url( '/blog/' ),
        __( 'Contact', 'q4-command' )  => home_url( '/contact-us/' ),
    );

    echo '<ul class="menu-list">';
    foreach ( $items as $label => $url ) {
        printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( $url ), esc_html( $label ) );
    }
    echo '</ul>';
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
