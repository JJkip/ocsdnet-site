<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ocsdnet_dev');

/** MySQL database username */
define('DB_USER', 'mobidev');

/** MySQL database password */
define('DB_PASSWORD', 'mobidev2014');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '682)wvEAE%43./Uh99ZE;o!rn(X,~fq]+<g:xdXJ7w<;zg/wC:S^+v+BL1q<s=d!');
define('SECURE_AUTH_KEY',  'tT#f[J ANZ*6vg/W?Q9|T=)H?[dFM^gQw~lf1c>S6<R<X>K$-^}FBXwVt[BM-B+q');
define('LOGGED_IN_KEY',    'Q>:8-4yU-H(P1|#9VNrcR;b/|k+Res:;(~~||j~4+U^]/Zz6, 0O+<H5*v)dFgdD');
define('NONCE_KEY',        '9GVl7`aX:Vk1Q+=?d:KvyZsr:;&8P%R(RKs%{~D2`m1~xY/l]pn~-%uJR<+ll5LB');
define('AUTH_SALT',        'kNu|:IMB-|{Vw=rfN_RX!SMY2|}wLw. +#w3P%fi<zG6v*].)ac]e1<e8SU3)[Z@');
define('SECURE_AUTH_SALT', 'yE[G?Uh-,RwnDu!)l(REjJ;|& wwvh`%2WcIWl5dE?G+3JyC r-gyvc6j;Z>f|]_');
define('LOGGED_IN_SALT',   '3@93b@BV(KI2@:7CGggvh+Ar[T5A4_iJ8U6^mZ,V+ju6No! Te+v[,7-X-w4`%ik');
define('NONCE_SALT',       'v%u(<OTL{I-5L`%SWE-O.o!T[q+_E}TR CRa1IqutRGdkQz^dwIjw.?Z4`v;r)h|');

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
