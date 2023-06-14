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
define( 'DB_NAME', 'Ahmed' );

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
define( 'AUTH_KEY',         'y%#Y2]@ Raw-6B,&^ZZr#Pq~w9Set|8vGyPT+CJOK8_1hfqN6UPULwSR: [.M|Yc' );
define( 'SECURE_AUTH_KEY',  'Z,?dKt}XP_-. )Hj$L n[KZ)J<0zr=li&9D3Nmek2/kxp8?3kt^2Zh;o+RwaE,x6' );
define( 'LOGGED_IN_KEY',    'bLuD%#.q6tQ8[T~2NvIKi:tlGzRzve}#cNQS0&*^V6!E7i_ncAYthGqfCccrlB.5' );
define( 'NONCE_KEY',        '6wkx11xVMF;g=`*oF<Y[t}.@T}*F&YU+g)fS1F~XtX>2AOP8jJ|1JgIo,>Hqowup' );
define( 'AUTH_SALT',        '!dR?IsV96hY>34Aurc_QSFBVhx^|yikVoAh@Tp`=>1B?LC<sd?CNa88#F|xoRLHu' );
define( 'SECURE_AUTH_SALT', 'WFea`cVm$XP+y:BZ8H |[eIM?Z.-1V[.b^%|wEu|XM6Z9;(5hz$T~U9G$7O7[dgc' );
define( 'LOGGED_IN_SALT',   'oM*KNfbj62d+v>@F`BK+0C!C$d>|DskG[}qzPHNwNTGJ;I@}q78cx}G8l0:1Oasq' );
define( 'NONCE_SALT',       'o}_gcPWl~Gs8sckB}j}NT<+D?AeSAU=68uE*xqBV|f$POs>.O[g1W2)4.^#3>KOj' );

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
