<?php

function child_styles() {
	wp_enqueue_style( 'my-child-theme-style', get_stylesheet_directory_uri() . '/style.css', array( 'vamtam-front-all' ), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_styles', 11 );

/**
 * Suppress Google review widget shortcodes from rendering.
 * Covers Trustindex, GRW (Google Review Widget), and similar plugins.
 */
function q4_block_google_review_shortcodes( $output, $tag ) {
	$blocked = array(
		'trustindex',
		'trustindex-no-registration',
		'grw',
		'google-reviews',
		'wp_google_review_slider',
		'review_widgets',
		'google_reviews_widget',
		'widgetic-google-reviews',
	);
	if ( in_array( $tag, $blocked, true ) ) {
		return '';
	}
	return $output;
}
add_filter( 'pre_do_shortcode_tag', 'q4_block_google_review_shortcodes', 10, 2 );

/**
 * Dequeue any scripts/styles registered by Google review widget plugins.
 */
function q4_dequeue_google_review_assets() {
	$tokens = array(
		'google-review',
		'google_review',
		'trustindex',
		'grw-widget',
		'business-reviews',
		'widget-google-reviews',
		'elfsight',
		'tagembed',
	);

	foreach ( array( wp_scripts(), wp_styles() ) as $registry ) {
		if ( ! isset( $registry->registered ) ) {
			continue;
		}
		foreach ( array_keys( $registry->registered ) as $handle ) {
			$src      = $registry->registered[ $handle ]->src ?? '';
			$haystack = strtolower( $handle . ' ' . $src );
			foreach ( $tokens as $token ) {
				if ( str_contains( $haystack, $token ) ) {
					if ( $registry instanceof WP_Scripts ) {
						wp_dequeue_script( $handle );
						wp_deregister_script( $handle );
					} else {
						wp_dequeue_style( $handle );
						wp_deregister_style( $handle );
					}
					break;
				}
			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'q4_dequeue_google_review_assets', 999 );