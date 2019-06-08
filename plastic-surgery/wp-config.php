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
define( 'DB_NAME', 'plastic_surgery' );

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
define( 'AUTH_KEY',         '/]`b>F4%W&tTQkgIeZS+]o6jq@9Fp<bUVv2WVB!k*9rbaF=1|jmYmhRwS_m@4,9R' );
define( 'SECURE_AUTH_KEY',  ' 3hYTGzVDfO~kAq!U=t.KQSy0~T8 w/D>1YL4qVg-C7pIHW%S;q!GvbxzB-8KF1R' );
define( 'LOGGED_IN_KEY',    '4D(o6q%SXllq<4kClbnVCg9mo}R+(fJV;`>Tmz.0ucqG}NmSnXrd+:m`?B]kiD-#' );
define( 'NONCE_KEY',        'WPd@P}FecCVLty~iGPP_ue;rY_F{,3$zhWD2VD3Go)5+1Ox(DDi5|9%5Z%+K7LW5' );
define( 'AUTH_SALT',        'd8uOvy4MWOp#6NMR-`T587+$9tYZohaOX^.)!Y|RN,qBu?As.u_6c%])8k/<  &U' );
define( 'SECURE_AUTH_SALT', 'sMxfQFfU=U>/R(eHrhA/D@oZ(KjLs3^E>Ii}Wi*?m..e1).{<|??EcJ;Yd|9/e7n' );
define( 'LOGGED_IN_SALT',   'Kc:!wtT`Z9j5SE2t#=/(Rg,HI&I HMo77}$}[AT8ZmYK}W?hI*_.Y](?QVR>5/U~' );
define( 'NONCE_SALT',       '^,#uka!S}peEDpY`EtJL,->#Qq#^#{#s=948I_?S@Mw:.hDT~,~Jgb)UWy4ejJzH' );

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
