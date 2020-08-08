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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'zemian' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')ild/Ilt  ,U7++.->;Ll|%[<Dk2|1Exw$9(xJ=)d(b~7:5*]e;EGl[4{+f4.#xw');
define('SECURE_AUTH_KEY',  '/IR-y-f+J>|ywsS-b`;<j7~_hWHX 931~Ac|A4a}a!/><1m`5EO<4>yZ^AgF Xcz');
define('LOGGED_IN_KEY',    '-/HLJX,(,oiT{8GxWJ^6i=`@o!4u9A;Iu5VX+( Ow.H0/{iJAit]su5`)3?47?Oy');
define('NONCE_KEY',        'r5U@_C=]GxzO4|s.Hj@AN_{YJ6,:>WhU|lUe+BTga3l+Y1[(gQn/<{Gi7|r1uB7)');
define('AUTH_SALT',        's|!6mH!S94oeVf8|aPws%o+/E=%:Uu,j!&{;+kDYr,+2/?#NF`-v]o`qgd+.|R+k');
define('SECURE_AUTH_SALT', 'Q`ZQZ;s0D-VOR~IemsfXF5x/=>EhG]AMtG+{pJoT-q- %@RGVvAs$Z(k^lCa+gS0');
define('LOGGED_IN_SALT',   't J,-$Mq#~lh-1k%c-h;)odFq59@:@v+4B<?M+$?m<-5b;iBebSMolXKxCP>B/l]');
define('NONCE_SALT',       '$#AxGynD,6BxpqM.EG~g~pBJ>vw%v7j^GMizs@+-&Bj)Fybc7s+`H?Hh!<Rqe&b3');

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
