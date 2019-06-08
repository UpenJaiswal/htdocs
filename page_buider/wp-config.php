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
define( 'DB_NAME', 'page_buider' );

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
define( 'AUTH_KEY',         'I*q~j^f t&qYat{_fpFJ3{~vV@]^J=im!6 c&._IXCjsy&(GT`KaK@9hmRj/}<{y' );
define( 'SECURE_AUTH_KEY',  '[xu#RVb1;>&E5Qhb}|J|k]v5ZQKz]0cPbbcq*RK(|(cu@vdq{y8p@Y@ic-Fkt{Bg' );
define( 'LOGGED_IN_KEY',    'qNZN!PJlmf;xG%QJaN<1g9?6mZfu:_`>ZSxp1/Y-[Yy$`V] <+j1x[1wreTg|k>A' );
define( 'NONCE_KEY',        '7TH;,jhg=@G~x0*B8`YZa]}C5Ub^^NIxG0~x+,+<(X@Sn;?}BkD:z6<+N2odc~JW' );
define( 'AUTH_SALT',        '#>0ZbI]NN%PQeMf{$.,W;o{_R Y2f_bv?woF,(6>]mTaP%VLj3v(Zb`z$wum@fj{' );
define( 'SECURE_AUTH_SALT', 'WfS.6BoX,A<#oGbb[afb7UO}HT2^J+`%)Mn?9;@E0*rq<N=:mZ?ezfc+]aH7&+=8' );
define( 'LOGGED_IN_SALT',   'wPlm!uqwwMg=NgG)of!qem`A5VT8[}_`[bQfc7p23]U~U?lNk!O}{DYVUA%MO Q[' );
define( 'NONCE_SALT',       ';p0|p[>*.1T,l<`h(P|GDNq|~Pqr0:Tad_O<gp)Qi7qrr&OcKfuT>~b+5KwwVrhv' );

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
