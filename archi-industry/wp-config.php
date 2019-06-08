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
define( 'DB_NAME', 'archi-industry' );

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
define( 'AUTH_KEY',         '(GK/~29t%_ib{N!!6QA(>$<~2G!o!kPn!_,b_5nmI(CY&x;Ixp`_<7!;{j~+Thnv' );
define( 'SECURE_AUTH_KEY',  'p>YCcaE(]gO{%|_Hcw?OuTOmb6Kyp|RpHN3^twRB=hyt%w`(u{XVeZ~g#A_;jWD{' );
define( 'LOGGED_IN_KEY',    '(}B,!k#?NbDet;#$3vTWlWZEVFnU_ZKS%w|v_Yf=ok EG_y#a<>w(pK s37|M1v!' );
define( 'NONCE_KEY',        'aD:+z ]/CbTz|D`D4`;yg1!OyOkc@=2gRwGX1fJ{9~Dn4oT1,.cYP6}-&_:x[Q.[' );
define( 'AUTH_SALT',        '?)qX>`]_fW-Q7~Gxj.P~E^axElwa,P8XkxG2T-bHpr>W+T*=?eBf^7l&KlKhSy]<' );
define( 'SECURE_AUTH_SALT', '}[#D]W9|%x$WDf+Drr %$zIK|z}Fd5h[pOE`5y`]F52#zBm`e,N}0RL/eRo!a|.9' );
define( 'LOGGED_IN_SALT',   ' p]Y5AG+wOl-(b{O(q[)F h:Q<m99}x1_PB({Of6J<1zT0IF)Y>w0ihOvA0P%]G ' );
define( 'NONCE_SALT',       ';|#%niN;4*02,*Ti_).B2HF<Kz//4l ?{R5#Ut_rthflpuW:7-4x:f_g~V=#/2^+' );

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
