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
define( 'DB_NAME', 'review_cms' );

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
define( 'AUTH_KEY',         'Brte4#*P# ZwLew),bk(#|>{[++O01}LpRE#SDHo21k[}>b4,:g{C]HJ;k[&D<9p' );
define( 'SECURE_AUTH_KEY',  'h>,;dot{2pmHhkPV}M[fKn^JwTwoJM37@kJ~d,3AHj%D=R>`5D+HCW]sg;6Hu&Qj' );
define( 'LOGGED_IN_KEY',    '8%fC}+KQHRX&iTZ,xo:2Y(FC5rZ8%iFDjs&}{gGwf08D;K;rSu2_0 La{]U^)xb$' );
define( 'NONCE_KEY',        'MagfLpzu_{+T%;uD(j&M([1k/l9)8:fm9B]CpFFK!4^Su>A : PJZyuG0e+:+^WL' );
define( 'AUTH_SALT',        'oeg|93S#B]4%k1&P`1IdjS`r-M%6d=f~JmKm)Z.>@A6b83CB2FtNu2Wg4lHBf*ia' );
define( 'SECURE_AUTH_SALT', 'Ab7)<? -b72_Q.f_,$MYEw,1Vh G?fp09%1G=xuJ!cK`Yb8xs>Z5EmLV2[40cyfz' );
define( 'LOGGED_IN_SALT',   'ptBg,HZ[=A7GSI1L*#ZEh&mE6xqf!.XV(7KaA*I=^wI*)i>d5GuQF^! YO*VWd`)' );
define( 'NONCE_SALT',       '3GvFH{,VDp[2V]#:?PpXE9h#u8n3_m fd%d@%vt-$y^QA|}6Xx?%Z~P!nkBBnkNH' );

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
