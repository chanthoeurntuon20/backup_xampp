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
define( 'DB_NAME', 'exam_cms' );

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
define( 'AUTH_KEY',         'HBh=H-0W>>2Ax;U I(41.,yegNQh%P]y#e^^Iu3Z)g_=dw5/I=4Cx3vmD@MjiPq5' );
define( 'SECURE_AUTH_KEY',  '6Bwt16xeuBYM{is_34-nxz$3]5M?DPygTb&M6Q@de;VdvYY_[~)] fU66FEdy/|}' );
define( 'LOGGED_IN_KEY',    ';5y!%:{Q w?lBiw,kp7ZuJxqde6J4Uwt2X7Q_.y9y[K/JMFI,PJ%Q@.BNf=W6W._' );
define( 'NONCE_KEY',        '.u:f~>O>lj%+HbMzPfcRux@,6<#!yf&$M@Z%HXpT{zSn-5d=^l.`t)+LQmt;.e w' );
define( 'AUTH_SALT',        '~S-I$v)ksjJ==LHVSWy.=X wcJ,bE23he5H]>k1OegIh?yG,ej(.?WYS[3}rHH]3' );
define( 'SECURE_AUTH_SALT', '6eOz^~O Rr3Qw9mi;9Kkv^$=w95qp:/zjsU`~Go,Ap@~+IbELWTdJe]V=B,H`Ras' );
define( 'LOGGED_IN_SALT',   'Tgt8;8% d)NVz?]pde0HQz {eif*E;5l&^u&>S@)wppfz*Eju<f1FcP(/cgI7)Ms' );
define( 'NONCE_SALT',       'Gqsd(QLfp#Q#c;z8r:W?GGpJk[F)Wd(YaexTY3e*g9!##R[^pi{dogJP>-dQN=*T' );

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
