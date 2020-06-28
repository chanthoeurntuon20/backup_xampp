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
define( 'DB_NAME', 'cms_db' );

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
define( 'AUTH_KEY',         '7p:y;Z,5f;A=lwhg4wfgxYya#280kG?2RB>TjK)@DBmA.Xjdn.zhQKXMUpDgjPJ_' );
define( 'SECURE_AUTH_KEY',  'Xk+vxAj;Ri#yaV+<N9FU%9QDkZW&68x.&$WEU2@DU[7!sjI7hD}ERq6;wY%Ylgi|' );
define( 'LOGGED_IN_KEY',    '#nj|J.%`rHK?7UWvh[5NqngpD~+vF[wE*fpF8y(3>(;/NOQo=NuQ.AbguBxv [WO' );
define( 'NONCE_KEY',        'MCLw-=GeoS= u}VQir31zk_DLD{7&$ZO*Tjq5W^%4ZsOPb4 SeU6d(m4QzW=;4-2' );
define( 'AUTH_SALT',        '(FY6)aiKg/2/<O+y;{!_{:enf1w5=mT9I!R{+)>tbXVn ADs-;{LdunjHk+W4&ws' );
define( 'SECURE_AUTH_SALT', 'Clm]|p0@t.%T9jG:@2JrPRm**%g+70`RP%XjLS8Vhr2h=w9LTJhY7tG=A.pb+dVF' );
define( 'LOGGED_IN_SALT',   'Fv#.,[u_;eZi-qOA):Og7sQcUQF0hy_is ub%TgAoa^5+0Y@ h7w{LQR5kg!6|mw' );
define( 'NONCE_SALT',       'kAxxK=7}jSt=Y:~.{-&:}DMf,8rJDd?#]pU<|[M5E]:W|@~_@&l:}G$~n18j2o_L' );

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
