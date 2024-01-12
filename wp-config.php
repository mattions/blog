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

$url = parse_url(getenv("DATABASE_URL"));

$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

/** The name of the database for WordPress */
define( 'DB_NAME', $database );

/** MySQL database username */
define( 'DB_USER', $username );

/** MySQL database password */
define( 'DB_PASSWORD', $password );

/** MySQL hostname */
define( 'DB_HOST', $host );


/** Server settings for Jetpack */
$_SERVER['SERVER_PORT'] = 443;

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'HYV@B0^Q+en:hN:v3^3G0j49S|EUveC:||BYTXvy),9`+}ds;fKZchB--&0,:jnF');
define('SECURE_AUTH_KEY',  't/E*f Fv^hrAlTiJk6:b+19!n)ck;Fr]2,!Wdu]}~):,v2F_{TrAp@qI3yl4|$J?');
define('LOGGED_IN_KEY',    '9G]%o_Iih+VHNpDMn#RBuFIxrX._+{%7foi[(]+}EGc?=y+^@%Ls+6U}tj1M|#<6');
define('NONCE_KEY',        '_2R<` ^>Li.8+{ia_aL8>Tj~mB3l{]i6(r|$O4># h8Zi|DYgP!#8@HNi)W4G:Q|');
define('AUTH_SALT',        '8MWVGgZRv=u|h^EK-B7@3gM.d&uq5dmfQ=xY!+#76oXrY !n Fu@wt/}!c 5)$Df');
define('SECURE_AUTH_SALT', 'i@`J5)D+XxYUVN1.-+x_c1Fy`Bj|3yCudcX*n,A|. 5o2Vti$3TH^,Rmbjw_k*)V');
define('LOGGED_IN_SALT',   'L) Z*Us-FoALgB$)[>sE|MdE@HZqli+$(jZj}-8KcWDoyJev#[O7vv>(Dku*~S=<');
define('NONCE_SALT',       '}F+Tmyb?re-+G?]M]{k+9|IzC.J/?t&8:Qdg>*z*2.48Q(q.Rz44+|)P1EGJ/-JH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Forcing SSL via letencrypt **/
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Increasing memory allocated to the PHP and image size**/
@ini_set( 'upload_max_size' , '100M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '128M' );

