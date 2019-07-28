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
define( 'DB_NAME', 'webnyxa' );

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
define( 'AUTH_KEY',         'Fe`3?vlM!7fqaXR37q04T)13m,LIt2+NxuBu*rLe4fli,MOm.c06l|L|uV.r#xT0' );
define( 'SECURE_AUTH_KEY',  '-iLM`/,y3G i=uFf=DI]iDr+nOutR,k|df]?N)@%ugVGj~#><al4yAo$q1wOG523' );
define( 'LOGGED_IN_KEY',    'h^s*723Zl*hyl/pcW]v;Tmn9O 3Wp|R6B@f//#EZGHpg:zTnnhtGC,{ ccg+pB]t' );
define( 'NONCE_KEY',        '#O;{9p9c!w?}]fi$F/JyT=12X,m.2 G^ZJ{3U]6-ZuLhBze~|D@9.p9~~_zMd}^M' );
define( 'AUTH_SALT',        'Xak| Xj`N7tj8aH6`#Abz%6qXG{J<>l8cZwx2+~ba~5O,Q$-4#M#j&%O _B4n hL' );
define( 'SECURE_AUTH_SALT', '8QNgfMrs ?9QvZNHCU$x]!T<qrhyGHkAFne{|Y]IXkzO$,-lt65j@9;zEZ~$Esb_' );
define( 'LOGGED_IN_SALT',   'qF$0`MRIR:RN`Na^,_)f6PJHB{``Y[_j=)raf9$AZ3Vt)K&:,| CHS8wM5IA7$ *' );
define( 'NONCE_SALT',       'SO8V&|a:J^f:&}ih%AhxFad/j([^HH51q54R)H[&gF ntv2ahuhhR<_D}<S-8RTF' );

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
