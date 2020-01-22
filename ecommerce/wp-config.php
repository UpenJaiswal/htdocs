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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'muW_ESjOw/6vCEGH?(qp+-d0^s&Yn~yjfb4Ob31zz=Q=[83oeuiQ)BM/}We`;c!w' );
define( 'SECURE_AUTH_KEY',  '8>?Z~b;Z:|2{|^f_yb7_:`jDa:iD_p9,%,,omA:ge1|swUoT#7xG5Ork}I(+9~0i' );
define( 'LOGGED_IN_KEY',    '9?h c<$M/_a Ma7Wfwh,&gz6$b%VN6R3NC#3aYzUG?0RmO#rPq9(iTr%NgL+B$4?' );
define( 'NONCE_KEY',        'w)%qJYc-]&WB}gs{;n20Jc~p1rH!EDQ#Y[:d{UYFP^q:(6~ZS>|.GUNNgrlBbqj(' );
define( 'AUTH_SALT',        'ZZr/Kr6XKt<Rgf}O:r#@:9<=qPQ_uLB)k[Y;4gqJwdI[$#x.<8w=n,}lX:X<nTHN' );
define( 'SECURE_AUTH_SALT', ':hg_X!%xfZtw*IMW]nNEN8r%lX8Br{&+::^&Gv7_HNL4[O#Ge<%vgvz1>F[[(K[w' );
define( 'LOGGED_IN_SALT',   'b*{`yQNI r$LmJDl6?tE9@mj+D9e?.~/$FV42RXKH:qSh_hded!@i2!0U/gZ3WUR' );
define( 'NONCE_SALT',       '$:)E5}WC.}`k,x2-7GF$hO_mGv=wzY?%,VNcfbt_7,@/GgmdW/w `/v^Ja~L+)o~' );

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
