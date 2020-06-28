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
define( 'DB_NAME', 'quiz' );

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
define( 'AUTH_KEY',         'mV,xVRex0IEmP%4n!%(|z:70.6#X?c[y%]Yiqaxb:?p-9;dT~Ny-&Yz /rcYeCFY' );
define( 'SECURE_AUTH_KEY',  'vQLmcC`7Ab^`VhilO1{)ebR!D<MhK@/+mHlkaB; OVL+PC*s5IG:hxI,B1V  5A8' );
define( 'LOGGED_IN_KEY',    '_L)bb2<GW~|1/1Kiu<}L)5juP /lc@_0hf1oI^)ef{x^iVeUq[`BWVCpf~wlism+' );
define( 'NONCE_KEY',        '47^d^-dsplGhv@|]Yu3DS5and{v&,+<zkc]TRiW0N I6IE+}[mvP~]~zgy:i![_7' );
define( 'AUTH_SALT',        'G-)tyRudQC.M?YZ}KS-~ZCH7,<H JVsOR}U,a/ctBQ+(VTRY#~NsKwAd$z>/803|' );
define( 'SECURE_AUTH_SALT', 'L9g-^-]bKgv[{<tO`SDW~H-3~Lum#&M:FP},y;yx&6e-uDPBThc<}ainzyupK/;+' );
define( 'LOGGED_IN_SALT',   'qT5w@=DOpvptPtkB$OXVE[>D3<7_.iWS-+h[Fd@5C+5HBU7RC P8s5pmqM!`reGT' );
define( 'NONCE_SALT',       'CIbd~q*+B+%WSd|b[k;dxxe.ARX#^3#pQOBh` xZ;bW#i(<:T^/:z_}l$nGK@b<r' );

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
