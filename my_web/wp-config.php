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
define( 'DB_NAME', 'my_web' );

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
define( 'AUTH_KEY',         '/KjhghiSixric4jY)NPR,b*>(a~ui@hx^rz:D=wBOLuw*w36>MJ~&L=&4u(0-(bS' );
define( 'SECURE_AUTH_KEY',  '?js;`:l`*YC4,8^xE5-Z[SNh6WMwd1ou${Ko6iP0YQjdj)L)S`L.3=kmSH;.^/=l' );
define( 'LOGGED_IN_KEY',    'pl^IF6= >mO(PLGsvt.$^r623%]f<y=f])j>NO`EP#KG@4Q?2$eOh.5bhrv,#EI2' );
define( 'NONCE_KEY',        'ib0M$0842J~[lb=|;Mk?L>{L%w8)?q-NI<`[/$0a?8|1DF?H+BGT*>pK|1|=(xXb' );
define( 'AUTH_SALT',        'ThZ!_]V&bp9CO#Y3`KJ1bq:O0Fz>bd&kt]21#VH/avNqBr94E;_NHpFUE97teDY ' );
define( 'SECURE_AUTH_SALT', 'UvZ:0?]::NxpdYfbI@ats<k-)AQU,E*kCzC%G,GUo<GreCCDYN{I.684(,{5h;>a' );
define( 'LOGGED_IN_SALT',   'c6Ut#R$yz..vsG!e5<$lAK)bowY+yNB/,>N%)f55|yh8@^@TISXyrZ1W|HdS!%lr' );
define( 'NONCE_SALT',       'O#uYNYgL_K>S_!Qp9~zXi8p/ 5NH}]U#p${}mZv+rD2b:|B4K!6xu[h7bJJwMfGA' );

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
