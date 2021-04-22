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
define( 'DB_USER', 'jb' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'jDgF3}mcM4:= F4*(StM>_evyad:!bA$wy1:}J}`m#|ml!nPL#TG::]Z(wGEO}pB');
define('SECURE_AUTH_KEY',  'o .k+`SxqzA=ERMNRq9+/|?bvL,{ nm#Et<Y 47PrebnkbmWRu7O`vW8VYtz_w`F');
define('LOGGED_IN_KEY',    '#r!t-~n6g;x.i<Qr~B&38|R9;z|ZIq8.wn|^LIpQ_KH; 0_F`D|y+~aZlij?*^XR');
define('NONCE_KEY',        '! @bicrdIbPl$++Az`0E8mS X>|8`<fD e+#-]l4]o9z|)eS)v3kX#U3]GAKe6NV');
define('AUTH_SALT',        'O@Jf+_)z!N]H;a<|%-/XLbdE]1 +/RcC+IURl7~!V-_s`I;>Xq5~i(Jc(+bVDHp+');
define('SECURE_AUTH_SALT', 'x~>R].%evxw%2*rb[~yP5*}]2E%(%-L2M;^4&O6V;?<q>OleQX:Y/JDw6Y!grh++');
define('LOGGED_IN_SALT',   'm@{*8>{UH~s]~@ZgaE@+fY@h08eEs}FXZu1/X*g~kuBFf4/2rVm>M6cb#@grp.-k');
define('NONCE_SALT',       '`Uo4?RGyY.+T6~0|sl,{6nBPl$>ne^aiYJDFtL!Q3jK7K~G0zcSz_ze1IcEfCW s');

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
