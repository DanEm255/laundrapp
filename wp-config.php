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
define( 'DB_NAME', 'laundrapp' );

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
define( 'AUTH_KEY',         '8dR{*5#BcKB97#fh?3RZeVc/| WXh8!c~!<8/Z2bf !~o=ub!/ZqBJ}w>.7o>57-' );
define( 'SECURE_AUTH_KEY',  '.dpklp&=IVZ<xD5v3=YGz1U{+d3He^@[.,[u<lL8?_M>t=,MAt;WHNB$Dy#5&#J:' );
define( 'LOGGED_IN_KEY',    '8_qbtqbnkB u!OWlL]C|n~8?.aK]Y^>ZK4nZ{11b9YO6VnwXIIz(TpX.^5B@}fx[' );
define( 'NONCE_KEY',        '^[yRLaz}Up;<7@~1*l %8FAm:eDWSwW6}?QX(LT%qO(;7iWraM7mQm&|N>%k+^6+' );
define( 'AUTH_SALT',        'hSRy1QU,FuEP]^LYI_CaD[3jf2CA$>MR9mzUM3$m)k>?<T]kMm)Uem8g39U[p$T-' );
define( 'SECURE_AUTH_SALT', 'rGE!xjbW^Qk`G-D]nhJ;lu]{<M_Y_Nzm Dz<@V|!<ji-HhX`k7-1OqRu2KLk|<HR' );
define( 'LOGGED_IN_SALT',   '*Cyz/bC;rwN*:E>}G=bj13A%Xf@Bi[,3e!Shy^aIro(~(M[e2}C}2_?mpz<l`FY,' );
define( 'NONCE_SALT',       'dIk+DwgB}n^Tf(&N%!#Qh>c3g6=@a1*2I$Lz&tbpWc=h4Xu$Nwv#7%c*9<7citkz' );

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
