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
define( 'DB_NAME', 'auservice' );

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
define( 'AUTH_KEY',         'H@.}=/AVIht2GU)tyJxecK_=%F~r[R8:Y<<p4hHMg`=A:}Syif<d&Ol,vvAJu=9`' );
define( 'SECURE_AUTH_KEY',  'Ky8_1Jq>`88X@C*ja{j50AMNNb*L=?1L%R&=&&`UnDjr.y,Y~U,K%dVvDj)PJf^h' );
define( 'LOGGED_IN_KEY',    'n%0p%Kunvps3:wE/Zom_?[[RYNxtH9C[}@Ps [+y0{1c0WoFypXz!>!Hw[*ycZ~Y' );
define( 'NONCE_KEY',        '#yX[*UA%Yu*jIV>6wG*DN]a!>RD>`x-DN$cq?g k#/vNe8y?Kzqtu;dUY3bV<:kY' );
define( 'AUTH_SALT',        'ZEa{j};t$8B^fBxF_)-F%$ZTL|,^Z $00t6<P/hstp(NAr~V#B`KJEdaSFi]ClwF' );
define( 'SECURE_AUTH_SALT', '`2VSM@16kKk4=5cvR|His*Ny?Sx%wZv{Wu)?W^%Vm[*R}ssgv&K0Q:#6Pr7Ik-;p' );
define( 'LOGGED_IN_SALT',   '&;}8I#a%S5qv!u5Jq)Db>Mgm-m)L;F8yHL9Fy}>QX:B7O8t!IgK(J67Z)#AD|+;_' );
define( 'NONCE_SALT',       'c0(/O7+$m5>zztVpU5/U2_~b8/T[2.+kYBg:6nBO!@y_%.)@pXh*Uubj9@FEvUl*' );

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
