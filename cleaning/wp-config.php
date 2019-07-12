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
define( 'DB_NAME', 'cleaning' );

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
define( 'AUTH_KEY',         'm?CPN`pu5U69$mKL=KXax`qWH&.4 Y%zl;L=n5j}rn)0gkBIa<<Uy@]?F]d~zB`M' );
define( 'SECURE_AUTH_KEY',  'z82{.Am-H0ogb[Q=gya.OIB<KnR;-$}_R+]}:a^CGf*Qk){PqOD/=;%;U0{aG[v7' );
define( 'LOGGED_IN_KEY',    'W^i>a;-@m~S>8KxoQV`z.{?v sDZ.jvnPv;-,w[,Bt7>R`F/<HKnjx&v3i&l`}d3' );
define( 'NONCE_KEY',        '?XTQ6GJ9iFi5nO{eFl:QVy zS`WMr0WPN.d^%G>VRxIElO4o9JTx289,r<N|]V?g' );
define( 'AUTH_SALT',        'Kknc)jP/+w$%#SxsHb5lZ]L6JOqLpYW~WbgA3l2cU(|x8R*eJ)ITZ[erQP$-mzKL' );
define( 'SECURE_AUTH_SALT', 'K~vOOsAny_vn2lhK9uUN`T>Vq-s#q@djXfBMT}:FhqR4w:{l+]NiWKw-}I~-7mBd' );
define( 'LOGGED_IN_SALT',   'cf!/&48kbk<9H{eOEjIis%d,s ljwdj*?kkL7+:+yL51el1UC{sY)D08qYWkg@Nb' );
define( 'NONCE_SALT',       'hJxpa$lLmnAs/%(DZ)vezl0AA=5ZD::CvI[gig7]$6w18u#7M/$n_{a:ed(nQgLa' );

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
