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
define( 'DB_NAME', 'taxanomy' );

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
define( 'AUTH_KEY',         'P@abcAR&=G]*c0:p.@o/ry9vB5<eE9(>@x%>(bw+{.r=g 0x*=8hA4Fw:g1d$^TC' );
define( 'SECURE_AUTH_KEY',  'MGms^ahU+@3Ey`p969;B6=L&k|k<O8Oc3Ijse`j=K2iJ-}6O9QYVQ[.p]>H;J^_g' );
define( 'LOGGED_IN_KEY',    'KGui.p[cTAs`5ub4g:?{`-eETF(^:ROl<g~SjB gzeVZ28MFhB~VQB1z&&NcpHi|' );
define( 'NONCE_KEY',        'ru/;i)=py}W215D(00S|TFTa>K!$qK[Oq>eISUebY2H -fOi[*!rff|n]>%~nVE$' );
define( 'AUTH_SALT',        'C=W{=CTx#wtu~JO~&vQ_40t*~U)wQ1HX2+:|uUWc~sI6fQuF5A%u*ga3({l2Ca$b' );
define( 'SECURE_AUTH_SALT', '}|XQxF{VVrxt,a+v2UpWm^)6$uH%6S^0qI3Yog4:gbw.J5Gs51.f6`G[__y{DEMx' );
define( 'LOGGED_IN_SALT',   'mRB R:~:lAV}~)C!=~X7`[N}VZF;r#SJDgedv9/HoIJ0!42MK6+~ WnHvT+7>=>M' );
define( 'NONCE_SALT',       '&Bq*UdV/t$uV10|Ww,!^j!A0gkOd=BS6(q_jot/dcq!ka_h<cDPRa`l[(XrK.YCj' );

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
