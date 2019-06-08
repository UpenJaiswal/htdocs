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
define( 'DB_NAME', 'canvas' );

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
define( 'AUTH_KEY',         'u/)nAy=:a6xYq[EZqK78Bv:aZ[#E>)yX1jTb`grUwgY;6(6l !O#[m:D7n$H-+0;' );
define( 'SECURE_AUTH_KEY',  'bgQt$E-NnEbp#OZDT:7ja_7kMm?j|o65sZnP&H~)N5/ZG(-&dqzmjaK`lK$2e{}2' );
define( 'LOGGED_IN_KEY',    ')/e}.fsG5WgA>.cj^X[!p|$)9U{;>)_ VV+VIn>i1_WLkY@ ! Soh3<gMAr/LaEs' );
define( 'NONCE_KEY',        'w;bxh;6gng80M( t]N!fxF/Gq-4uij1l 0xohg-9vhc94[qB)rV8>T=3HA]]f?,T' );
define( 'AUTH_SALT',        '8jW[M.d!1/}]{&cmz#4pFdd^Ahr#gh-AhUb!H~5tvYmk-m@@6~jfX]oXFR:ex@RK' );
define( 'SECURE_AUTH_SALT', 'uvZ?tRYN?cA!Cf+CiY25Y2#= d_0!_=UR6y+,8%]`iy.LcI#x3D4M@WGu8vyb`?^' );
define( 'LOGGED_IN_SALT',   't3mNqcQOdW<?hs{{/GSRC&sR]jO$JQ<mF;0U0MASH!Lv2:eX/BJ4kCY|`3z#4$ #' );
define( 'NONCE_SALT',       '{bXG=Rrkf4JX* sXCqaVB]V?,M[Q6znNK8: @0_04{G=c?+a9as8V^(cREE3dKzL' );

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
