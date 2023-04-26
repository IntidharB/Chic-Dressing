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
define( 'DB_NAME', 'Chic-Dressing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Qg@2Hf3@3=P1SZj PbT#XDZ)MniFnyzBaC:V<h/Z{YdQi#|zwSl F5G9Nm}Zf_bb' );
define( 'SECURE_AUTH_KEY',  'r8O^{?mHKOVRcjh&C@cqcwqGIZa%Lwr77wMc1<0PFw)BD.,aK.r(*`f@8xrW/ur,' );
define( 'LOGGED_IN_KEY',    'e#!y+YRtuf19XWe4=GMceeC,yA5H4te7fr}Wb)A)MwNLAB4d6)P/E@bU-iK%T3<j' );
define( 'NONCE_KEY',        '_ra>]x-{a{t0Ov>`@WAU!!@(N|i%4L?@?U=E^Jvym^_X~H$s&+9TAZ*IhWa^/5ct' );
define( 'AUTH_SALT',        '(4C5vd0T;2w6!J;-bQOnG|M6}Jkm2lj?:H,|65V7}64:Nbg7q8c?+.{^)S?IEQ Z' );
define( 'SECURE_AUTH_SALT', '&Z50MM)Qp$5D)+OYj@=s2=+S^AkxN45$-`@81_GTJMi4SNEZV[L/KPE9{a:!E6G!' );
define( 'LOGGED_IN_SALT',   '9cW|M_PRMV+b2Dy^&~D3p7na-UQ7s1>;EM-4ieB,q[KELPm&DORzWA)d>Y<kXvPc' );
define( 'NONCE_SALT',       'f9rrX}u_iyI#ks8UPZ;w6t=`k:Bj2E(Cx0c<ie 7*/-maGRw[0:4@]SGL:|t$*/.' );

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


@ini_set( 'upload_max_filesize' , '250M' );
@ini_set( 'post_max_size', '250M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

