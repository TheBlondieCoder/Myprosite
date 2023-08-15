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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'Bluepanda88!' );

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
								
define('AUTH_KEY',  		'%Ke6(6!cg07UdcTPKqq)y2^hwoz8TytvT2$n(fqOtAX%Y3U^(Xs2YG5EmacV&OXb');
define('SECURE_AUTH_KEY',  '1y$LrKybpvO@CTx26aA75jRaR$GNeDtXCJyS(Z0PcJR5nANl)qETLg^cfg!kr#&3');
define('LOGGED_IN_KEY',    'j(*)AZZljKQBJBRk&1tCu^d%!qVYeiyXPK8#F3&RIxQtZvAM*&yqEN6LraZ4mUDO');
define('NONCE_KEY',        'roO6HiB02*TO9TJ$wL#n@(i2hm$FEUE5cr3!Mo@w*8g5LkkJsfITlT*ZQL#(fG8P');
define('AUTH_SALT',        'vQk^tf35eTVI#@Qyxbqh7S8B^N7fDok02ivu420zVLmNEeicP0Z2YKnzI@IqLVyx');
define('SECURE_AUTH_SALT', 'lfui2bpFZ^9A)4^xvA8Rr8Hj%yEBf3TY)j50!HlM4C@q3p#4UYvVHAo))Ev#$w@r');
define('LOGGED_IN_SALT',   'aZgpHunuq4&r6C150E1x&l8Ic&$MnA1f9#kdaPrA4URg^j4&pS5)C04RXlflUGyT');
define('NONCE_SALT',       'Ze8wmB6CauH2msW)8f)4h&cQo24M%8Sc04@whDc86RUunjNk&vI(!l$JArg5eIPm');
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

define('FS_METHOD', 'ssh2');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
