<?php

function child_styles() {
	wp_enqueue_style( 'my-child-theme-style', get_stylesheet_directory_uri() . '/style.css', array( 'vamtam-front-all' ), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_styles', 11 );
/**
 * Remove Google review widgets/shortcodes from front-end output.
 */
function smb_block_google_reviews_shortcodes( $output, $tag, $attr, $m ) {
	$blocked_shortcodes = array(
		'trustindex',
		'trustindex-no-registration',
		'grw',
		'google-reviews',
		'wp_google_review_slider',
		'review_widgets',
	);

	if ( in_array( $tag, $blocked_shortcodes, true ) ) {
		return '';
	}

	return $output;
}
add_filter( 'pre_do_shortcode_tag', 'smb_block_google_reviews_shortcodes', 10, 4 );

/**
 * Dequeue common Google review widget scripts/styles if present.
 */
function smb_dequeue_google_reviews_assets() {
	global $wp_scripts, $wp_styles;

	$blocked_tokens = array(
		'google-review',
		'google_reviews',
		'google-reviews',
		'trustindex',
		'business-reviews',
		'widget-google-reviews',
	);

	if ( isset( $wp_scripts->registered ) && is_array( $wp_scripts->registered ) ) {
		foreach ( $wp_scripts->registered as $handle => $script ) {
			$haystack = strtolower( $handle . ' ' . ( $script->src ?? '' ) );
			foreach ( $blocked_tokens as $token ) {
				if ( str_contains( $haystack, $token ) ) {
					wp_dequeue_script( $handle );
					wp_deregister_script( $handle );
					break;
				}
			}
		}
	}

	if ( isset( $wp_styles->registered ) && is_array( $wp_styles->registered ) ) {
		foreach ( $wp_styles->registered as $handle => $style ) {
			$haystack = strtolower( $handle . ' ' . ( $style->src ?? '' ) );
			foreach ( $blocked_tokens as $token ) {
				if ( str_contains( $haystack, $token ) ) {
					wp_dequeue_style( $handle );
					wp_deregister_style( $handle );
					break;
				}
			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'smb_dequeue_google_reviews_assets', 999 );


/**
 * Strip legacy Google reviews section markup from rendered HTML.
 */
function smb_start_frontend_buffer() {
	if ( is_admin() || wp_doing_ajax() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) || is_feed() ) {
		return;
	}

	ob_start( 'smb_strip_google_reviews_section_markup' );
}
add_action( 'template_redirect', 'smb_start_frontend_buffer', 0 );

/**
 * Remove known Google reviews section/template fragments from page output.
 *
 * @param string $html Buffered page HTML.
 *
 * @return string
 */
function smb_strip_google_reviews_section_markup( $html ) {
	if ( ! is_string( $html ) || '' === $html ) {
		return $html;
	}

	$patterns = array(
		'/<section[^>]*elementor-element-dda5d6d[^>]*>.*?<\/section>/is',
		'/<div[^>]*class="[^"]*elementor-template[^"]*"[^>]*>.*?google\.com\/maps\/place\/Red\+Key\+Solutions.*?<\/div>\s*<\/div>/is',
	);

	return preg_replace( $patterns, '', $html );
}
