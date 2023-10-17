<?php
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
define( 'DB_NAME', $WORDPRESS_DB_NAME );

/** MySQL database username */
define( 'DB_USER', $WORDPRESS_DB_USER );

/** MySQL database password */
define( 'DB_PASSWORD', $WORDPRESS_DB_PASSWORD );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`&odgsL4y&}VKq_xYg6w5!+4AwdiuxU|Fk-OJ;@PK+?)l7{5[s&Eb@ks~#&t?:EN');
define('SECURE_AUTH_KEY',  'Aw4ThXfdtkQ@G%hSM[ _sFEsx5tHA+therYc)M};0>l/azj@a$|=LQom8$f=(+s/');
define('LOGGED_IN_KEY',    'A&M&]LeWP*M^{^dHyP!!2,:cDi]+=yE-qJ=sxFXxksV=AUD|TEi<+<Y--axd/y0V');
define('NONCE_KEY',        '2w0v<CDuSI^{vvyugX?H^W_0s +`m|C(t6jy,e8:MR~>aqJ+pnc]5:60I1;B_<0K');
define('AUTH_SALT',        'uq5Rwu1Sxm|sxYk40<&PM[oB,lS8/Oei%29Or;Q7o]|cT79}B#VFt6y$+:mc:|S-');
define('SECURE_AUTH_SALT', '2~M64]>57),2Xb9n6`;K!f%?g,: N=),3-+135<MNhaZ_fHZ|S Wx+RBKPcHE69t');
define('LOGGED_IN_SALT',   '+kW<TMV2l9FLe[BC!W|L$w!Ke66aD@3EE+upR0,uJ6?xUrtGjlzE A>iQvkLYWCP');
define('NONCE_SALT',       '$,k#_Eb(rysGlgvdcf[skACba$z+|ZSq}r]u]z)dG5Y@m+~-)bx~jv#jDd|7sc&(');

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );     


define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>