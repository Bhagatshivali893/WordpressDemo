<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'abcd12345' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.chd5cnc6i1gs.ap-northeast-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'STa{$X`}VHu1h(+B{+j<uKDSk<J++xGy}*bNgy{i9Nf<VT$*s Q|V(n3,i|W]0@)' );
define( 'SECURE_AUTH_KEY',  '10Go/~99DP*)ZB^DVSZyg64U,`pN0>/EHL_8ps/S@jHD!&$up9KW!>7ix6e{iM,u' );
define( 'LOGGED_IN_KEY',    'M[!#oSk^`F|q|qd(W7Y!$Y(1iFZ+8vWyVt]pEq9XK9+(:nx:^G|UiJ-q6h#92no3' );
define( 'NONCE_KEY',        '=fjd!R|@wCi=H.>J#2*7d 2h6 pT4wE`u}yRCy~It1EmSdY^CtDbu4_+@:=S|P<b' );
define( 'AUTH_SALT',        '^>gi{P6&I-hAq.Lf-T&Msj&F=Zy&q+Pta,: :$L=4blklZv4-7ez8f>&=|6;Ao`F' );
define( 'SECURE_AUTH_SALT', 'y&6fnMF[RV^nRQ|O|8ErOnm|Y8[HR)j(@BrET|8S|%8|v%6Hnp3_$]PSixkaQjF1' );
define( 'LOGGED_IN_SALT',   '2dgP+1.Ly>Q/#uy0N|AIU1B_2VD(&`RsSTA>K|aqi->j@0b-^x}ysPvRa0%@~4aq' );
define( 'NONCE_SALT',       'a<^cIH-7+tZn,AzX5~;LS(`1Z|%4+F-K-6t/!36bZBVW#QgCTb KE|*6~$Gt{W{s' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
