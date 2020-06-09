<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'macpo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=&K89&dD![ nsCW9kc ZSOG>gnn/)2ESuZ+mV# VTO+.~llFva*VP>ekE)]V$qDR' );
define( 'SECURE_AUTH_KEY',  '.FRLA7l|%I1LC=+4]A :KQ7(VjFk*a#8SZ/RWtd3$j2QKIO2W|8VDJci6el&L3]:' );
define( 'LOGGED_IN_KEY',    'l16YAs9uLy(.6}$taO9!=^C;l~RI S_E@18EYUOC$#w}9f/`E8jL;Fy&+R2UD/Ro' );
define( 'NONCE_KEY',        'T`7}3fF3IXs&g.}3&.`h5<nF2]upmVA1xHd9Ex6)E#$Mv?i`yyOp.ooK-z1[YRH5' );
define( 'AUTH_SALT',        'n<{v}};Z-]J@eOOpm((hHh!Vy!qSoLYW~Q^86tYDxIs6l2zh.DTM15Z~7mK$o.M#' );
define( 'SECURE_AUTH_SALT', '%8<7S;b :]3z:2<ag36Rl0lGr WD|Ja`mm*@37 Bxu-cnK@G6}5gC)i B9$NpB-[' );
define( 'LOGGED_IN_SALT',   ']5tFHML^(0KPt^jM-t.k7H%<1Nmv7U(GD9Mj(6XBj_uT2sa.GM9,c1+7RZ$e_G(i' );
define( 'NONCE_SALT',       'W_vh#>4s$1|>wBdvQ4D/|zp*fT&;N6]YO3<NBo+|%aTnJAY`gEF8Ql!TgCGn_&+B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
