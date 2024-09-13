<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'iqmbc))()k5,vr~eF[Pp&yc0UW{AW^J)YWrHi|l`VmXenY$lBL?bgkN^@PIEDR+.' );
define( 'SECURE_AUTH_KEY',   'RIG#a?rH-^A#9lS!cXp,V:6h~$c7SNn9CzuuL+iHZQMIK7!PP%<|o#^ZhCJ*!upB' );
define( 'LOGGED_IN_KEY',     '`l3GTI>Uk(bL?nKN&d`gd Bo-fDxf|Y}Wx3.NUu-T(:pA0J3<H}<NX?8y4f/sC#m' );
define( 'NONCE_KEY',         'l4 Pm$Lu.FCNt:%o.uv},!4N;6+b]0.?,7ZCm~Z<ni}cU2zv>Emm<PV~)[*o@U[Z' );
define( 'AUTH_SALT',         '#zG;@R:gkq7{6!pEjX!LF~~sU+~jcQO(g`lj_UmhOu)Tu@1ks iFn/5i(0n9tg:Z' );
define( 'SECURE_AUTH_SALT',  'LHu^W~37HpjmND;t*u/#R1U32VX`?hI qL5R-R|=xl^4aki$rT^>RA/PeMRJZHwZ' );
define( 'LOGGED_IN_SALT',    '|w:Bce4 j==:H>Yr;2a{7AF.n${]2AxoG`?)o/]#Oa.e5iMY7<rVzC+kDa6t1EEa' );
define( 'NONCE_SALT',        'F*p&CFI)>.y9$xtM:I5iH*f<vv6;.iFr}B>l>9EhFNlcq63%b_d>%Su_:=LuH9=}' );
define( 'WP_CACHE_KEY_SALT', '(C8>h30:28L-N%-A(9=ko=F~2*wIs2W4Q>Xm#-afEU5/Lyr_FgY+QmmA=U(O2z:s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
