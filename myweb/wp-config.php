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
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'P_j1H7Mk)KV4T&TJ}m`N`yZBpc|LJ$!3M3*O5|l8~0,Pf:m-Cn-q<[fAG.d>i-{V' );
define( 'SECURE_AUTH_KEY',  ',ce>VP+LkX=^Jup`R4WS2cdp;P8A.S5I5`K~E,4ua!Whq <L#R1zlr>=kBJI^J{`' );
define( 'LOGGED_IN_KEY',    ':}d6;5bb}{j/tM 9/nhmukf(e<cY=]$8qYoK^rX|oF ;#22V6x1d;H9_^<AuRxRW' );
define( 'NONCE_KEY',        'k<lv+A^++xIz:C%_C:urZ!$=#?u~?ZJD3U3U:~#AW#jM{og01>`u&pH)e{L13Np-' );
define( 'AUTH_SALT',        '/XbP_U?Q`0?&(Qh7=hAtOJr5)kf7}%yuSu&0trt&Nqe6{mcWL4>7w#`}YS>P;g~G' );
define( 'SECURE_AUTH_SALT', 'r#iCg9L=;Z gFh[;>vBqp/!^wPDfz0Te.]V42<$|)~wo=0n,DYe3}}r;G:FC[o]&' );
define( 'LOGGED_IN_SALT',   'e&3:$:+aIHt|&.uMLcuPnTB^E}<U4%D>{jiKbI60Vr#d)rxF<,F#}+dE.:d;.PL%' );
define( 'NONCE_SALT',       'byb3uUs)[Jt@M6Ch;kU6/9n]ladgMe}d:qswf{RB]S-j7XHF&OSMXf$Ed%5?,8]I' );

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
