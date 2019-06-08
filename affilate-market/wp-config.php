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
define( 'DB_NAME', 'affilate-market' );

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
define( 'AUTH_KEY',         '$[)/Q`5AbiE#css0aoKmpu18FEJbq`=8dJZoR?cvRH,<pYtvRWMrmY&,BRR3x:B:' );
define( 'SECURE_AUTH_KEY',  'qQ18tqzZ6i);cYQcr9$+UYZuMpM~(=cQop7)S1c;5SSa/OQyHq%@kq]|E B@;^dQ' );
define( 'LOGGED_IN_KEY',    'K&E{PZ[RT2iFI2!h;:[a~<iWudI{t*KV2s1f,|AT4hLm&,ui+_80=;Lh:>&7{{%/' );
define( 'NONCE_KEY',        '<SGd.XBhQduK?dxg&DgMYScLL?7~oXFZ&y*LojhSH{0kdc:%p}h+Iw#P.w=jzfqV' );
define( 'AUTH_SALT',        'Fo1uG7G;h>8*yRmpZU:$: J{SZQk#t12f/eL{Xm~y&$*M-}#fHX.N8C:EXamB;2W' );
define( 'SECURE_AUTH_SALT', 'J>nIMbJFea30qk0nx_Tn]CNDI8Kx|~5ks_37b5f2bj_$%wH3J#-VA1^($$,M>W5|' );
define( 'LOGGED_IN_SALT',   'WBXNO<utjy4y{kBLnUM@:kt;=|IXaQo:?59M|pNJmdQyhK/%uoB]tFurC@<c/P?<' );
define( 'NONCE_SALT',       'L4CIbNz<+YI~T](<CBRrJTBcRwF8QvY^h|MJ#Nd)7REEr5B`p/t4G*`>P~]yq]2p' );

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
