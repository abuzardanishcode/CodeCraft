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
define( 'DB_NAME', 'CodeCraft' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Hrhk@9090' );

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
define( 'AUTH_KEY',         'Ii?#NN6bjpFNA(H:y9OT17wl>of(WNZ#iuT12ke0^%<GD;nWP<%l{9i-xP#CUlQ|' );
define( 'SECURE_AUTH_KEY',  '8j~DtQ!8{$KIwEy+>kATU |i>`-+|*u%A(Qf]tgnUi+z^m~bK:55{Xf.8RNgon2]' );
define( 'LOGGED_IN_KEY',    '#,KsNMg2yN`8j:Y6(@Q6>j?P/~pMM81r3{e/M8|aBX$dCZC0hX*C|.C[3=mGW^!K' );
define( 'NONCE_KEY',        'FpA<llM;V|=]<Lc)^J@Mua}EIjGGUH!Q%mFDGc3#ly@ON+T@ed_IoRj-ChQ!ey(J' );
define( 'AUTH_SALT',        ']ll&)Cz<hvsc0:M:wNh3~edi$bR!dD]r C5Yw9Vu&Ma]=:pFMx&,y8Vcypm:zfop' );
define( 'SECURE_AUTH_SALT', '.?*=e>.tl$5I;^c6HKs1cN[V*rKi@D3H5rrTT25/D=UFC.F@O)S*Sa|(O-U.oRNj' );
define( 'LOGGED_IN_SALT',   '1_5&l48 2.K9jz51XmfKzlfTQ=p4BE7F#*}ve+j^kMt!^r@GPl.uTy_C%q|qYi8n' );
define( 'NONCE_SALT',       '8HZ^VhgW)OSvg>ax:PuGoj3BM7e0k+t$fs+fV(^]qy_,Z6O[.i2gJ&ZnP~OmG+(S' );

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
