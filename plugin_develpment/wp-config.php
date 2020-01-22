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
define( 'DB_NAME', 'plugin_develpment' );

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
define( 'AUTH_KEY',         '{,mjr1kDwFcN_Vlg&cTTRRSq$?~S4txclM`dOpj;Yt+,Y [HDJH!d)PBflz7t m9' );
define( 'SECURE_AUTH_KEY',  '%?!uPH4ohp>n]9K.eorZel(+Tm);G~`~Qn<qx});YdBCeg_`&q&Tu:RijT6T^5_C' );
define( 'LOGGED_IN_KEY',    'Fk>58XuER5ub|,0o!tZz)zT8NmY80BE}y}%yu$G;533@61E_gBbI_g(Mi.!gPs+M' );
define( 'NONCE_KEY',        '(6E-<[^Dpmtp22MGcX7d|EH4.bD(4m`OTZas2&&gUS?DZ7YU;>#c?-:T01}Riwt}' );
define( 'AUTH_SALT',        'A<&tPs>-m0NY`C-xt3g:N4ZVgy4#SK~oVUa_>s|xA%7{S|(fux=f<lY-#L]AqrW9' );
define( 'SECURE_AUTH_SALT', 'Kc@)p]g%NhC>i#i!$8_-G]E;EVU#mLqE0IeP.NWOF`($$K@3`GJS<la=utBu-f9&' );
define( 'LOGGED_IN_SALT',   '2R>jJNO!VXG]2+.[{Dng]MO#k5zeM6TBR[(<(G4>mn7:$rHg+>7yuZ&*lKr/DgpP' );
define( 'NONCE_SALT',       'a! avbsk!oE.:CCtl*t7nug$3$7}Toy=)E76rnhOS`cr_}5msD~U7fy@%+S:mC1?' );

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
