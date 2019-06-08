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
define( 'DB_NAME', 'Medilab' );

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
define( 'AUTH_KEY',         '-.2SAGMc>;dx,Ewdj3T$|<qX-oiAWMzd45FTZ|xwk,~C8kGWJ>)ki,<jb+*!;7(<' );
define( 'SECURE_AUTH_KEY',  'G-in,3^-x*Z_:zC>XXd5409BDcfLm92> :]><6W6L<VIC|jJJ.IlT46z2.?14/9F' );
define( 'LOGGED_IN_KEY',    'wuBx `4%#,.Et.`!-*Vh>VSSRTR7ig%Hr|DQY,KlbC`V>tqR7yIPp{xKSEq/$P5M' );
define( 'NONCE_KEY',        'VUxpNGNBklTSbVldH.k4 ]J]0!1{F^4bYISqe46!jh VV>wc4*B^WhX<IXtaFCb:' );
define( 'AUTH_SALT',        'wZx:ryH(Jf%z2!GQNvdD@*:?7=w0zH.l#pQ!YuW~g^4ZcL7i7&]m6OK[+27X$f!U' );
define( 'SECURE_AUTH_SALT', ',C.p^!!8~r ml794NO7j 7do!?9c_GP M?hLi+lmNfwBUZ}$hH`2/=l;|_7~PYX/' );
define( 'LOGGED_IN_SALT',   'Uq;DD-#aVP-=,/u*kj`Dp/{Mutm|/b;9z(Cmg)2:-my>oN5cN:YocUDN50(d11H;' );
define( 'NONCE_SALT',       'UypY%-cHBdd[*wjD=O*h*r l@RO#868QD<Zt_z3de2(h1*^T0Js(F}``LkEr_B4E' );

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
