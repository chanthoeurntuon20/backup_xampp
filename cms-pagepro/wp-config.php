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
define( 'DB_NAME', 'pagepro' );

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
define( 'AUTH_KEY',         'tTL5[78k^q->bkZ<mkBAL5ETX>d6f7z4qkM3L~S7WIKpU9|!YVb1{?>*c77g;KSS' );
define( 'SECURE_AUTH_KEY',  'V2:I13rK{j*<L@;>I?m9[&m]fdyD(&}TBIWivRPK}~T<@ylmu=*3:M;eZy$TR;}Z' );
define( 'LOGGED_IN_KEY',    '-Yxl=INMLss[Dzr?uM}Zf5HL!,DeAVf)<)$`8d0t!_(T=_[[_DiIX^`Ks8Y+Ee[[' );
define( 'NONCE_KEY',        'J1IzUa)1elj,b)k!+q#FA5Hv&$(Ei<]=)&;aJ~$+Dg40|i.zXTXrs!RZh^?gh(H?' );
define( 'AUTH_SALT',        '`>]qd0fC&#)tVP/L+?Jny&#-_r%<e*d$^u`L8`6DJOvwr/R9=VLJfeQX{9D,WeC9' );
define( 'SECURE_AUTH_SALT', 'GT= =ssd?Tm^(uW<}ix@+VU.emNS#Ic>78fxO&ihT0ug_#_vJMHA!KvQC7PSFNdX' );
define( 'LOGGED_IN_SALT',   '9?1LLhpU34g 5>A ^T;|fy*FZop~p[c(s#p BWByR63rUuiB~/-(f?CtJID,OpgR' );
define( 'NONCE_SALT',       '/<MXjV:<z+7?a2U{Twe/p-e%>1Nu9^HaAzva=SpQzJ-M47 JRs~;N[Py8Yl)MWO0' );

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
