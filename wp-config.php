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
define( 'DB_NAME', 'Venta' );

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
define( 'AUTH_KEY',         'w*IXk}S;KVdBDTLCc-ia({GB:._mkl@[gGl=+d)R{6-!hkT/8Ffm`l@wq=l:v*A_' );
define( 'SECURE_AUTH_KEY',  'aZ^%^r,*/02p)D9K(&~wVU#+I1A%:6{$<<2mm[ c[IxDo&xrFX`D&PSs{l|kvl$B' );
define( 'LOGGED_IN_KEY',    '_b<gv_; b0Z/[u%N[:CCBNEBqk@]560H^,&mX|M9<3zg/@PKKE:-[[m#?7cpTi2^' );
define( 'NONCE_KEY',        'nb$2TmwqTvCV/Q|Tg:*{;s2,&P%8E@O8~!Whp+l&%rRW$ZXnDZ&^p;Fa{[D~fOLD' );
define( 'AUTH_SALT',        '7<@,T;x4^kGmC[$3(ns2#Kot@Ut<;-JSaW8=p^J/{>Q;R^G:Wf40R0ww_F57i|!8' );
define( 'SECURE_AUTH_SALT', ']V66n:{(ypJDRaR;XK5v=1tG/A+a+fsH|A$@s-c !SJdab5CmIa&L3:/` *!/1Ec' );
define( 'LOGGED_IN_SALT',   'F`Gv8hVo8W#se%]W?mC~n@i<Xi.8o,T2sjEz)o]M*bS0`poxnDO9xYJi:7&DtCVy' );
define( 'NONCE_SALT',       'Vh=h8,(yK?C_d0u,.B]|;${ih}r~IIl>wn6[SN#?u/SQ!%_s7x@PI!lhUc`LU+3g' );

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
