<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Abdullah' );

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
define( 'AUTH_KEY',         'vzHakk[`#!{(>IXa*0NAMIgQ=MEi+4W_.M:]ch,zW^ jbG?6Ea5$~)f}dikwpkt|' );
define( 'SECURE_AUTH_KEY',  '[?47/:EU>7;])UmD3.XL)Q&%K;OZN D%!es6Kr]htc+]oEO2}?NpbKtd[ 5DK3O[' );
define( 'LOGGED_IN_KEY',    'hxu$SfB&Q{jL/c8W4a-Vq!*Stxp_]!zl-PP?WEzA=76WmYLBPxj^94nB9_3|{WHu' );
define( 'NONCE_KEY',        '99qO4]?(U%,!l$=5SkEIy4SaJt1TKr!77/56l-WzT)-M[b-5fR X5`?JZ7LsJP,2' );
define( 'AUTH_SALT',        'a/}H`Von3Xko%A>>U@kFI NhwA2q]],52Nf`?o=,.9*h)D4zb{7*utDfz<K{l0#W' );
define( 'SECURE_AUTH_SALT', ']3T~_,/.|Gf}NQ;lv&tBvmKG^5qL]:/oRh?2@/_g1?i&:`nnI-8Utj&G@0IabMpD' );
define( 'LOGGED_IN_SALT',   'Wp_2h;B1hBb(aH|eMl5pc+<+n{QQ][[;,drTQ{]+uUz6f[^MMJXe1iT>LwtMRP:A' );
define( 'NONCE_SALT',       'ciY!raGg! b0|-/@(&Cg@^LE^,Czyf-<3|OMovOr`lv),`k,L]uPf{SWx}zt~wY8' );

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
