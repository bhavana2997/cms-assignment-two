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
define( 'AUTH_KEY',          'Gf?)!zX:;2G:zU/rKSr6..+WvZ_m,lj?R#t!:NmFJEua3C~NBx6/aRdgMz2l hIh' );
define( 'SECURE_AUTH_KEY',   'kgSo9rBCEJsYMsQV=0DsFt/c%f?YP72KXBdH3o6X~tM[W10Cx8?~CYO6=N3A/Vq5' );
define( 'LOGGED_IN_KEY',     'i&m+_IB7W[CkAEf_`@!dw;/ fP~08E,3Y0TI)PqV!m+IZDcofy_.G[pUbczHdi7l' );
define( 'NONCE_KEY',         '-%C5o9y<JV&qY0h`F1|W|~p8|!_kS#QFXGG,^d%fDuo|&=i4Sm-e5]ezO0b=cT=F' );
define( 'AUTH_SALT',         'w%Z8X(oT?:;p>~@g]o%/Jcw(78q;JP+mBE{Y,nogJ;n+An8nyS%*YXmq~R*,VD/%' );
define( 'SECURE_AUTH_SALT',  'QS=u/$:@BGvS!m<O.iA]>.{ ap@j %v1M%%Ojo($AKcg+QvHt^8ZpevZuGIl`#Tj' );
define( 'LOGGED_IN_SALT',    'My?9r}=|CMeUMM#s5l2,4}?g-lQMy~w8/ EDYBE|I;;0Ie??34@W;<$E{XhDgt8I' );
define( 'NONCE_SALT',        '<~M%4,nL=b$7CkZX03$N0k84ZqT @8Vu5h7Po!R /Z*3Z o$>#@vbk,O>t:o|*b#' );
define( 'WP_CACHE_KEY_SALT', '+9Hv>Eh5p}-x]OD/@WW#|y%A#N>Y*h8Cc~YG|8&^`O~>#l+sAH^o_;;qj_V c,Zi' );


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
