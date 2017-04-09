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
define('DB_NAME', 'woocommerce_tuts1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Z%*%z1n`1{a;oJod!+%3b1C)KPSz_YGa.+5%Cv}w!NCV<N2rwrPx&kFoQAK$<za&');
define('SECURE_AUTH_KEY',  '|D2V+Y2=9=#zK9cDqgWy?3]BtzDsNUz2Ulj Xc[Cs:rzse[{9d_uem<iJfYAMi=m');
define('LOGGED_IN_KEY',    'Lo 985$(Jw Xaj_@C(3,|696L&rt/qhoCAebVbvkSM/_czS3@7P((/Zrb|vC{V~e');
define('NONCE_KEY',        'UDaBR+X$va>%)V;TJGOv?4,%SV%H!ou;BX:JR2cpK~J {3^Uw#*7KWrc^p:s pTz');
define('AUTH_SALT',        'Hl,TvU%LgD5+[ta;Xg beRP=fU*mUN|g5rkZ>zG{Ba/)!C7Oj{1RbGGP#H}OzY>k');
define('SECURE_AUTH_SALT', '5ZCss2;k~t]PE9&SD!gP?`+W,7;h!qx)QAzThM($C1mtvo)a^AilI/M*xi7iik11');
define('LOGGED_IN_SALT',   '&.Lyy ^LZ{CtUQl~`1M.:3T&O)1$_=KGf0`B{$5o/J|8_J!W=Tr)eTsw$$7PnuZ(');
define('NONCE_SALT',       '}d6@>>nrbKu}eV+bX4&A.44w/&D_^8&M3w*rS%{&(,l8U%6Kye!E g!FZ`s1tzs.');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
