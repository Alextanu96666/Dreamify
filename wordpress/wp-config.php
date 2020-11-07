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
define( 'DB_NAME', 'dreamify' );

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
define( 'AUTH_KEY',         '/[(z]wR:Dmh@]+,RbDt|3pMr!^Qb p]e)o, -@_)50NHEnBZpb;jd~8uoD&Q eJv' );
define( 'SECURE_AUTH_KEY',  'Q7Y&H{cq0A]?8EqY.m4;(bRe[9Pu7E/iS8VK_^kV[B9{Z|S%6ZJ}`0,FPqFUZRoi' );
define( 'LOGGED_IN_KEY',    'V?Kr]y6+A?sr6%*A4uXVlbuWVlGg/xud-7Jx=:)A+Evf X%8#]W8:[Ap7Y`A cbi' );
define( 'NONCE_KEY',        '2P7O6,?BZoxt;yCr^Y+ks;O]wxujv.<n?^~6m}*_9;MCb,BzZlM8HuVCevxLI.R7' );
define( 'AUTH_SALT',        '_RTDl5ZeD:iW77k]G2moGDf]GHRqWu^~(lP!5<gvq0Jy%Ts_`^j4wIuUc}s6s=T/' );
define( 'SECURE_AUTH_SALT', '7(^{OOjdOE&[5?H~3W/kKZ~a.SVQV!.(:+:j.<e7LsPVe)AFS;xL[~5769W0O3AJ' );
define( 'LOGGED_IN_SALT',   'JwEWbTwnmowE{(d$e(VUv;oCSZd8ZMS?{[jB33DAmlZ(#L13#)?tv;>E2ah;vEbY' );
define( 'NONCE_SALT',       './vo(GU1 -(K9pWyJm/e;/]#>K:aXZ<;r}NECI]{Qu=9-G9d{83_]k.F3~`(7$[!' );

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
