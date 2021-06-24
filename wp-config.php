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
define( 'DB_NAME', 'demowp' );

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
define( 'AUTH_KEY',         '&,K+y5.f0jg9A(A&G#6Q/*CY24TQmSMbx<=Q.u-XiGb-R:aG?U[IBP$V%K)#Y(l~' );
define( 'SECURE_AUTH_KEY',  ']q0W0.d/YI6QG1_FxP?m9w?DI{:lx>RMgR1kPC+Ec@hP9mb;KWGU(^aF)P;Vz>!^' );
define( 'LOGGED_IN_KEY',    '7rKOe),gdQ-6ZVnUd~%B2S.rZiI3*c`l-96[`uBmi|fzxmq6xe2i8p`*J8?GB!3x' );
define( 'NONCE_KEY',        'IGvnS]Gb>iLn~ ,;{G(4brb~%Ka^C|FO6Jz^K<X`2>QHkDkE6=a+J+cg8S5k}@E5' );
define( 'AUTH_SALT',        '?mih.:,-)d #Q[}m}V~6kR,2|{W~Bfy[z}vu#n:RK%I=r6bZK8sY*;bgC!t5/Fu@' );
define( 'SECURE_AUTH_SALT', '|?K(K|12&,u!9C!cM7Pk{y.BH4{4EY|_QgLKpMzr{Hyi=FBfAlznR)`y !<b#z$A' );
define( 'LOGGED_IN_SALT',   'qZ<gV{mz-C82)-R@IW9E$<<Qt=biR/_?h%Ccw;$I;0L$6}x<!TjA.LWW.}|G@ oQ' );
define( 'NONCE_SALT',       'W&o}2c%AL42!_!zK.E eVWOGvYNY.{$gMOa^1)cN+QkdL=>WP@_&&ZZ`iV`7=4`0' );

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
