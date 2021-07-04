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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'roitailorshape' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Bj!uY`xr`#B4s6|UNNPLZzlFh~} QMKC A)E@qp&]J,hR-=dP{J0k>c~KTe%_=2/' );
define( 'SECURE_AUTH_KEY',  'pZZ>[4-I%/HNvC?5(|)<s5a&zoskj=1OgAFS%U7u+04o:4Vq!mk&F$|Bm!M,5_)Z' );
define( 'LOGGED_IN_KEY',    'gG_Y$t=J*=>2EOU+O%=#M5uuQ&vio-1fk f5m6zg`l^ow~[g+^tYcB1HFYQ7rG>S' );
define( 'NONCE_KEY',        '7>?|`&cSD1(t)}J)ykxtq{N(e1OOJh(<IFJ{nT :g[#(k@D}vY`Q+HR*6=c!B1lv' );
define( 'AUTH_SALT',        '_)Ib*8SS6b6(EA-b&86hS6xr:G^DpF$}p%U}KWIH-?lu*9LSCc)fx1.})x=[d9o0' );
define( 'SECURE_AUTH_SALT', 'kJ2Jj>f5*${oSq|!Ah( lAh:-+Y2/.KH99$&Srb^Z^yrZ`rXpv[~ CT!Jbb}Zy6c' );
define( 'LOGGED_IN_SALT',   'BL3[YgK`g-:SxFsFc;H$gwx;U#>Sdj8|tMIk1O$ZOXE^aIE$oAQS$<g(05n`C1s1' );
define( 'NONCE_SALT',       'X6i-9^IEp`v`ApNH y)qI_H/g_~]g0Zlaz9fY#i!11<HN!:r*?0W]+4qhk| %z|W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tsrh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
