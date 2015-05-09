<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD',getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U+Yt_(OyUs?3=1-idM]yGUm75-ZNT}.phaq1Jl-%ga;)?B#*/bvw=L)I41N0z8DL');
define('SECURE_AUTH_KEY',  '_<kcPI3iDR=r~`(,#p^i%hkM^#)Ycot=?7VI%<]_-_b Tb7+=84uWWiA~{P~DL|j');
define('LOGGED_IN_KEY',    'lp;1PujG7kCEb<F|>9(+loJcd*1+R$YcT&[;E%2nMT%9f%t6V8|g4I>lnT9kczG`');
define('NONCE_KEY',        'X~)n2K[J9iE_yGG>42ngXMq_&kn4q( 2NK5&uEt!(-nj)(u>sDa:N6ofz48R9SyB');
define('AUTH_SALT',        '2KXD(G}zfH]F9@+JxAy26hISAtW@m6L1F.?/psNd^0+h~|K-Tl-5++#cd$[Q;{}w');
define('SECURE_AUTH_SALT', '+&4bQ-uqDBD)W8qfnI(O{-/LmcsUPsO|#<EjJ0a$ge)[18pR f:/N0IIDux-n{Sc');
define('LOGGED_IN_SALT',   'AS[rVqz5pQ+N~`v<H?BDiNoqZ[4j?)d8Z_<nXR50K?=_r,8pX#WFy-unh2(oi!(^');
define('NONCE_SALT',       'hRReK)4]|oifCz_k1L>C}o3gYWjEICWlO)v;8WH|!=b7GvvZ)RASu`+I2TRZj_-o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
