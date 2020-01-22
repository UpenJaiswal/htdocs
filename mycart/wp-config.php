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
define( 'DB_NAME', 'mycart' );

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
define( 'AUTH_KEY',         'Pd`*^/5Px6V;}1z;eSZ24pD!?3=3][qo)e%D=7Pk4AvQP}1hp7R)=4tg?|l+K=6;' );
define( 'SECURE_AUTH_KEY',  '}mLuMGGen]*}^qr^0FO@5RD4mI~H.OuC6~ymSH#9`hT~;]1g<~rfkjLrZ2Wj?H]w' );
define( 'LOGGED_IN_KEY',    '#]p/!*I/@qyV9prB*2y4&l{e:9Xd3:)GU39X4s5!xY;*%lX60Y|:>Jxs<+IDFW)m' );
define( 'NONCE_KEY',        '@*_(H&2_;1$DV=[*D>aj5t8`H9>(A%4o$c&?PSuEWE,V3N-8N O~Q`j$W~Z`dBuX' );
define( 'AUTH_SALT',        'mXkbdYzu<nMs>S#=`]~GvH(iIa[cJsXpO$:ZQ.R.e,q9!IQnC6>N-0Ruf`s*G6h~' );
define( 'SECURE_AUTH_SALT', 'Ev1X.c[UP0(qP(b+.r1jV0beH0|FT*|]ehn/HJ-ulLZNAh)P16zQsWPRmyV$=VcG' );
define( 'LOGGED_IN_SALT',   'Tz4bQ11l}z9Ik2jVF2J*Bu)$F<fHwI&*,i,1/q/XF6XJ$@XzSbzLeN1ie:q~VHT3' );
define( 'NONCE_SALT',       'Sxe&?S^A>OzP@RHEfpV%,QzN%)Cw2%*xO![Ca5xS|: meVqtPx+zDmc7<<TCZj:c' );

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
