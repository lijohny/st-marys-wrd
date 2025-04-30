<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'malankara' );

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
define( 'AUTH_KEY',         '?Gfy%6wS+Z_hV+cT,YK-=#lw1lM`F,E/,i&zB11`/LTY0KEk34|Mn9LG*h5tFS}y' );
define( 'SECURE_AUTH_KEY',  '&!,.jhQu@=zOb[kDOTtPdQ;7Fonw&Sl#O<6b@85wS|nA!^%(Fx+ri@nD_^BjY+MY' );
define( 'LOGGED_IN_KEY',    'm(X[&Q;-mxoA8rLtIUdM)M/ T`-c<pxcQ (wXr`Y4(~RHNi{v+hOy?f}SDdn/fdb' );
define( 'NONCE_KEY',        ';m>aUsD@_@ <WFO2TP[z_4-jn`Pq3H9CD^Ky>?s}k O#*8_&]tE1qqm;zO^KRQp#' );
define( 'AUTH_SALT',        '~;`hyc}:1q]h3FPK]Oz]d{D6Q8)cT7~%ql6L!V9n>E]X/rkCR^O^a>sf1Sczn^s0' );
define( 'SECURE_AUTH_SALT', '4h+sWum5ap.miF_;wyuIKjGa#:GhC}O_mpv p!/I!#q~Dcpw46Q/zH@j%3KC<40n' );
define( 'LOGGED_IN_SALT',   '5!E]vj#LzgW;uA+;egVP2nM<zhRJUX@ImsXn]}MxW3x!nSQt7NF2or$AsEM92v:A' );
define( 'NONCE_SALT',       '&V.kB6Zb/|@qOdH3=*q 5:GWSkC =gbP</A-;ac{p~pi~Am{q9SrJ[`|p_PjJQIL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
