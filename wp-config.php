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
define( 'DB_NAME', 'dbwps' );

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
define( 'AUTH_KEY',         '@B>!/chT*oDaj&YAd5jej{vKI~W=N)1mU]oaete`[ S-S3<9sll(DCA+Td-Mp##S' );
define( 'SECURE_AUTH_KEY',  'Zx($``=8g2i=?`b->_9 o%~u<eYd #!WoW=rl#ZrS3_HKrER6v3.ig.YDGnbu&=<' );
define( 'LOGGED_IN_KEY',    '!:-=c~>;f@[Fc5f1VFuU_GSt~@=OZZI=`rlZ4j:~ejrp/}#S&%MW4L[R!%$4sx*G' );
define( 'NONCE_KEY',        '$0SjqxYdQ26QielangX~g(Fl+?:l9R/g2M*<6=?tI.%w=n6ul>/},36@yoeZpCH,' );
define( 'AUTH_SALT',        '#FBN.cgWa,!k`O%&^o&*Lm#:z&HOoJsQn$Gy6fV;T.<0l}#H<sIp5KBw%$H+ XQ]' );
define( 'SECURE_AUTH_SALT', 'qN/#mEAAuZkXIb,onkDVI?qVCA{_rgUQ_V?h,,osGHJrFcjU|FZ}sn~ERuoQm4fK' );
define( 'LOGGED_IN_SALT',   '[9Db{ZwvD$ @{Cn1,v?m*b<@_VnyGX&2tT6K%BGTZ~FD#|Hz,1*NfB3kR7X^@mEu' );
define( 'NONCE_SALT',       '%}NFp<E}/Yr Q;ocW&O)_zRFQcgpK6KW:>o+,tXO<),Ao+600U4*4oO*+JbcNM6g' );

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
