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
define( 'DB_NAME', 'dbwebb' );

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
define( 'AUTH_KEY',         '9.q4k.LLv]/X7)-&9$4&zI:l~~cfY0AMuqr)hj4OGWu^[q)A1]#L4Y@(>vg7nI;L' );
define( 'SECURE_AUTH_KEY',  ':Q%5._CbWC3o]u)!4:PCsu)}:XM62DkQPNE_&4B1=>`9n&WDlTD=w%%cAnvC0T=8' );
define( 'LOGGED_IN_KEY',    'ONEF(jkaiB<:;K<`g9F:|50b(D&3Utai&|ujr~Tx62m|`?yy2.Ti;trr &QgB29h' );
define( 'NONCE_KEY',        'SnC*[|QMMam/WQ:Tl2yT.F~r;6!D::,{Qzj?UnwP-FrT$+h/V[s{L~gD*]*q]?7E' );
define( 'AUTH_SALT',        'UT2@)v%Nf/fH2G){!V*DY6/e.*g3C0(Kq`vCu=kIwas=tKoh{o#ENSH<U=Da?cm&' );
define( 'SECURE_AUTH_SALT', '*c>KwIJ$]u):NfXswGdj_*l=|gc%:%swQU1dVwuktbyFf0 AQ,+SdQdTK;>Wn$eh' );
define( 'LOGGED_IN_SALT',   '4AMRl)fVEwpS`O>$2k`}KJWG7[PMx97g$cYl;R%/.@+c?L_:*~1B%v%;Jc[I`m{w' );
define( 'NONCE_SALT',       'Ma/?&5rWGf,o[t4wL+p93r%GrNRJsPnD3%oLuazHCX&67N5f8wv7.^~Hih_JU:VZ' );

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
