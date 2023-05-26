<?php
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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's[^,41A0qE=}:_#a4Ym^8n6Sgf[D+7LTN;Rf7#?f.D@D=O|=l``s|`<EM*<;s 0U' );
define( 'SECURE_AUTH_KEY',  '8(;$d@7[`iJhVdkq,YtQxU`7)O1@4VK)rBCn.][r,mdp3l-u?B6T%7nIFUW[g#v7' );
define( 'LOGGED_IN_KEY',    '/&G9?C2O>8j942iRu3Rl-i6F Qu=0mt!5;VC?B<#;Vr)Z@4lM$QH19nGax#7]siy' );
define( 'NONCE_KEY',        '=[hMD/%^FXC(X;A7E[/M9UM!eheZwJ* eIj&`AB=#zSdv{.^*}h8ueMO7pv*=&48' );
define( 'AUTH_SALT',        '04R/w@:je!aFk:?2@iT+NL%>I#<AMrJi[.3VzF<bk?Pn/%n bt;J-CZyVw< cH{Q' );
define( 'SECURE_AUTH_SALT', 'jFw//aj4_@^O3?D&g7*ge:@nlnPxhj,D#S(1 E.eUS~&wVWYt/Q~B[kcB<EJ,IgQ' );
define( 'LOGGED_IN_SALT',   'vSe{Ce>$S6x|zNv^j5icpT TU|1^=^;J@LiDXo~.Adu![(N]L]vDo]{czNf:UXlF' );
define( 'NONCE_SALT',       'whfR!z@MHIxT-.!/ lPlTPzh7YVHMTnGm,L-V*bs#g7,Kj,$z@:EVRgk%9:ht3d6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
