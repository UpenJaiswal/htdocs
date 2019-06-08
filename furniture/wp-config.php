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
define( 'DB_NAME', 'furniture' );

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
define( 'AUTH_KEY',         'M:A>a5d<n.P<a#-pN9zgGZC|B$YU|zL,5hdg8@Kke_or>^`-{*#-5r]iS5{,r]NP' );
define( 'SECURE_AUTH_KEY',  '`9|e1:~HsL.r^p-B/^*l8a=[X1=i-}C*Jo<m&57{(|KKKAv5K()!w6Oqul{kzcAq' );
define( 'LOGGED_IN_KEY',    'mQj9wE-wvFm<lQwU?1}s1 b-#e{%!gDUq=O_w8*v8JW[Ev%N<Lu9VVS&3$HDZ>/@' );
define( 'NONCE_KEY',        '-K%C=FHU|l=qH*ZVCnT$&c:J-RQD4Q/W5L.X+-1ED37fG$oFhiEYG_(a(m AW;jp' );
define( 'AUTH_SALT',        'euun ,|y2UM<CGbg4c[l{!]qW~wJipxGNTcD5H5WE#psX7AieA%s8eWzDr)cMX;b' );
define( 'SECURE_AUTH_SALT', '695(!0|lcw-avWk+O=6J-%T_&j+4V8bP8.8,1OTzrzCA9:*P-8~TO^t&h.9qk@|a' );
define( 'LOGGED_IN_SALT',   ']BO3J3cgN=k=;_k0jq_jZ0`~)sB^!/d2.W[tKlIP$LE42iZ^33gZ[8H,WM8}V`6U' );
define( 'NONCE_SALT',       'WCP`kBUm3)+:c<hXvO,ED.}6fCW>/G^q#He+}iPu;|(Z~Weu2XuC;N-rB4qg/OEo' );

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
