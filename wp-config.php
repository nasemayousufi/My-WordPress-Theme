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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-database' );

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
define( 'AUTH_KEY',         'm~c7#b[PT0+zF<I{]<IFK(J1;8.DygA?mR~9(/6)#o[44v!x@CbR]!M;e5n<WaBf' );
define( 'SECURE_AUTH_KEY',  'S1mTq)x6[Gz,#hL}|l?(4<oGe<zn1$@0&4#+oCR}loISOs|/)99Vh(Btkfj#NMi`' );
define( 'LOGGED_IN_KEY',    '22/Iwa/T@-QXixByxh5~&bf1I*qdoU<1k^bK$)%~$I$E*dI!YTfyR&Qbl@mbJOI|' );
define( 'NONCE_KEY',        'R0o{m8v=sM?(J5%f]LL@f,u|Z_dQ+yh#M%ACD2E7s/;aCJ)a<^Z`H!PU+;D.. 0d' );
define( 'AUTH_SALT',        '7dV=|8z|R. kj+V[/D3(vC-O&}raRmmGD2J]qr[OL`W7afdo,(T=wKES,=hJ!=u&' );
define( 'SECURE_AUTH_SALT', 'Q0]vt55Xo-CLff&PKC=`]xvYPmPL!i/37~!y+ 1sI+,|J8TW6yYm:p8<+WYHlMAE' );
define( 'LOGGED_IN_SALT',   'br?jktV} qW4P<L <?T-Y.HK|ft,=;6y8(nPWZp}O_UvqZM 9<@>Y%Dzq}3.:0pB' );
define( 'NONCE_SALT',       '~#s7nks)jP0VrNPG`.(84K`6xm[(J~+p0R@LU|[5]Wz;{e]u0~%oaq6HIs+eUQG9' );

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
