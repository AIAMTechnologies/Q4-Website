<?php
/**
 * Plugin Name: SMB Security Hardening
 * Description: Baseline hardening rules, secure headers, and risky plugin suppression.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Disable XML-RPC unless explicitly needed.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'pings_open', '__return_false', 20, 2 );

/**
 * Remove high-risk file-management/editor plugins from activation list.
 * This keeps code present for rollback while preventing runtime exposure.
 */
function smb_filter_active_plugins( $plugins ) {
	if ( ! is_array( $plugins ) ) {
		return $plugins;
	}

	$blocked_plugins = array(
		'theme-editor/theme-editor.php',
		'wp-file-manager/file_folder_manager.php',
	);

	return array_values( array_diff( $plugins, $blocked_plugins ) );
}
add_filter( 'option_active_plugins', 'smb_filter_active_plugins', 1 );

/**
 * Network/multisite plugin suppression.
 */
function smb_filter_sitewide_plugins( $plugins ) {
	if ( ! is_array( $plugins ) ) {
		return $plugins;
	}

	$blocked_plugins = array(
		'theme-editor/theme-editor.php',
		'wp-file-manager/file_folder_manager.php',
	);

	foreach ( $blocked_plugins as $blocked_plugin ) {
		unset( $plugins[ $blocked_plugin ] );
	}

	return $plugins;
}
add_filter( 'site_option_active_sitewide_plugins', 'smb_filter_sitewide_plugins', 1 );

/**
 * Remove easy fingerprinting vectors.
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

/**
 * Add secure HTTP headers that work alongside Really Simple SSL Pro.
 */
function smb_send_security_headers() {
	if ( headers_sent() ) {
		return;
	}

	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );
	header( 'Permissions-Policy: geolocation=(), camera=(), microphone=()' );
	header( 'X-XSS-Protection: 0' );

	if ( is_ssl() ) {
		header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains' );
	}
}
add_action( 'send_headers', 'smb_send_security_headers', 20 );

/**
 * Mitigate public user enumeration via ?author=<id> scans.
 */
function smb_block_author_enumeration() {
	if ( is_admin() ) {
		return;
	}

	if ( isset( $_REQUEST['author'] ) && ! is_user_logged_in() ) {
		wp_die( esc_html__( 'Invalid request.', 'tecnologia-child' ), 403 );
	}
}
add_action( 'template_redirect', 'smb_block_author_enumeration', 1 );
