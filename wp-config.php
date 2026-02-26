<?php
if (!defined("RSSSL_HEADERS_ACTIVE") && file_exists( ABSPATH . "wp-content/advanced-headers.php")) {
	require_once ABSPATH . "wp-content/advanced-headers.php";
}

//Begin Really Simple SSL key
define('RSSSL_KEY', 'EBm1dt6tXGWR486dvG9P3aGIFmGDVXhBQcV1e46oBEI7fyZTEWWF20X7GXgQ9P7e');
//END Really Simple SSL key

 // Added by WP Rocket



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'dbuwwx80rakjik' );
/** Database username */
define( 'DB_USER', 'u1anxvix6q2k1' );

/** Database password */
define( 'DB_PASSWORD', 'Submit@#$2023' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ceqe8ud8p7gxbqlkyiyhxhsidznxho1jcaiezdcpwtdheemc7unhsigfvp5wxure' );
define( 'SECURE_AUTH_KEY',  'jeb3ocj9l4cs2420bdwlngsf4hvtmiqc2regw8y0q3i842woggk59sgvakv1t2yd' );
define( 'LOGGED_IN_KEY',    'rkwzwh3gclgrjhe34dp2spemze9hfio3fwm6bybpfvemzi6aehhyce8fdfx2dkf8' );
define( 'NONCE_KEY',        'v6esfsmgser8euyqifleefiaxqtbn2pyj6moo4qbqghk87lficro3xwvlhiu11w7' );
define( 'AUTH_SALT',        'x2ewvalobky2ecbm8msti4dypb92fvji9b15jsmwamaixg76cqcjlntlqyj4j1wm' );
define( 'SECURE_AUTH_SALT', 'c6nshdx9qhrzicd0vbwdyr6bekluvzx1dkhz2ugsresta1d7cy6bhilexn0w6vxh' );
define( 'LOGGED_IN_SALT',   'dzbrl5lurnglublflao1uztohlb26hcysujhpdz9inzhjb68rwnifa71bpafvlnp' );
define( 'NONCE_SALT',       'qvkiv9jjazghdnylsqoatuj2jihqt46hycfpc5pnltxpivoyv7dm6plfgcjnontu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpan_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/**
 * Security and maintenance hardening.
 */
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}
if ( ! defined( 'AUTOMATIC_UPDATER_DISABLED' ) ) {
	define( 'AUTOMATIC_UPDATER_DISABLED', false );
}
if ( ! defined( 'WP_AUTO_UPDATE_CORE' ) ) {
	define( 'WP_AUTO_UPDATE_CORE', 'minor' );
}
if ( ! defined( 'AUTO_UPDATE_PLUGIN' ) ) {
	define( 'AUTO_UPDATE_PLUGIN', true );
}
if ( ! defined( 'AUTO_UPDATE_THEME' ) ) {
	define( 'AUTO_UPDATE_THEME', true );
}
if ( ! defined( 'FORCE_SSL_ADMIN' ) ) {
	define( 'FORCE_SSL_ADMIN', true );
}
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' === $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
