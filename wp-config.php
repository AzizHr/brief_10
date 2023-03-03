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
define( 'DB_NAME', 'nytc' );

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
define( 'AUTH_KEY',         'Pyr#mE%,TM!%MI.~KYf7=0J%+y[d^1de,=73].@onXs<UU9f&=)em<u,InxCwMko' );
define( 'SECURE_AUTH_KEY',  'r8k-dX}e/<@}/UFUG(R~,#,s}8iW(|?~#4|Z^[[+#N`Aq+nQ.6fK/4E^TsyX$w}f' );
define( 'LOGGED_IN_KEY',    'YFcZ<bdf>)YvBUUH=y0};QVF$/A8{.mdA>:n-Y5:@C~SgKIXc*=a=3l 1:WfRd0T' );
define( 'NONCE_KEY',        'IukttiSeT5^w@!F4,t;-%;trVHa-XV)o# TtBap>i#!C[:D|t0ZEP:ZBKLD$;1G<' );
define( 'AUTH_SALT',        'K,*j*yGFbY0B>hG%gvI=DSY6750j~7}L^6a=V9rfHUazR|@)??PPF%Lom_cRR5?8' );
define( 'SECURE_AUTH_SALT', 'FsZ K}9[(A&1BNHmy87@Jl)k+|-25d2L~/WsBhmw/X0EBXWxJ<,F51,^1w$P:5Jm' );
define( 'LOGGED_IN_SALT',   'PX~vR%+9[.U1+Nn2H&UyG!;H G>[}{iDZ}l{TR<`q^TnPrn3]+9{k&B<~vrdh*6L' );
define( 'NONCE_SALT',       'QcI~mKw7;S.ela7z4MoX(q}U9S+TSPrr@Y_Gl},)B1_#7Bx{YkD7S*g4aC><,ZR5' );

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
