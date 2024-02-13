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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't=VF@YD8[]n>>S<yPn2tG]P7^:oNOa6sc[7VvsBondjx)rRkuvA W{-2zP/jP5p{' );
define( 'SECURE_AUTH_KEY',   'UJy9bPbzvCN@(3B2g&ZXXB(cej0Aq&D&bGdaW#]~PLI^?-pD=Z}6a4=;7l39!(l<' );
define( 'LOGGED_IN_KEY',     'v`AZ@P,6!:Ez{s]Z%#]N}-VQAwU`*riHE9HojUP00vB(A)~s6TTq1(<%,<g<i0fi' );
define( 'NONCE_KEY',         '4ST*2!x~A#4&SiL4Y<n&kYmWi9m)@Q#5/%K{Ay<*#|f[s}nnk>k[zPOQ@JM%9rU_' );
define( 'AUTH_SALT',         ' L!_)[pRk~_[XeJ]0lhH!gY~aitq+G,4-7[xfA[3BUaL&-V*!R;g2U~2B?&ER.$_' );
define( 'SECURE_AUTH_SALT',  '_T^B2n|1j4GbNu(Y-es4t<*;6%cAHtL5h5#OYq:DrI!@e$<RdD%XFqVAcl7sB(s!' );
define( 'LOGGED_IN_SALT',    'Z8k60n>@|.H8sv~R(?=81k+Wd8?}(MfSrzDkD2!7T>ZAc^+2!`w{9vn<oC2cE6{W' );
define( 'NONCE_SALT',        '#i^ikOS1HNUqT6ad]sE[W4Kh9`VUX!V+y@zYr?N@fD^Q&?$ne,KP.,&OGR[+A>v*' );
define( 'WP_CACHE_KEY_SALT', '3[3oH~; r4+H6wBrG{>;W<j}}@v3/bN]3j3.7&a:&L(ss duQCChcr6[A;QAqqGf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
