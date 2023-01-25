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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ziggy2' );

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
define( 'AUTH_KEY',         'v,d? {Gu7wJE>}<9}m9CZht)F@-5MTKlv64&ma?y-q_t8`f]23>!y`]M]UrRy>+A' );
define( 'SECURE_AUTH_KEY',  '7(,u5>%Em)-Xgn~lLx!n$jc|r+=gl%R!xW,o|8>jh7{F;|zdeTUwR:q!u!{i8z4?' );
define( 'LOGGED_IN_KEY',    'nJp1AJkp0aH=Xm4A/?khY#!(nRN8xH}4W<^VG9Em!zjy#DP|)_p+BrG De8q:fj1' );
define( 'NONCE_KEY',        '&8%iszFmqEZC~#WqiR{;jX4w8;$I<f!JsjoE{]!Iq8FZUM]+;J4t}~-A^e8#{[`H' );
define( 'AUTH_SALT',        '8yY;LpX aQ57HF.&ifvP;BQah^Av)5(F,35E+>eLV.Yb8X}eE>.*hQ#}lE05;iv$' );
define( 'SECURE_AUTH_SALT', 'jSrYtl>tRVm%D_P}}PfDs24wjO7E*BFmX%+ur>/_]wTm?W~ER;O.?9(#;?=jYT99' );
define( 'LOGGED_IN_SALT',   'S,-~T6i(=`*a#=`P^Caa)E<^emFsH6kTy#FDv2KP0RRwd!`rb|4|nwl=9Vpt<fHh' );
define( 'NONCE_SALT',       'M`>r0&~|G20Tc)(:n@-AXX)5_y8H*]i}nlo~{5@`2f;+W/qMa]%TE66{]k7[f)w ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
