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
define('DB_NAME', 'zuadadamDBda1u1');

/** MySQL database username */
define('DB_USER', 'zuadadamDBda1u1');

/** MySQL database password */
define('DB_PASSWORD', 'W6wzqOGojG');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'J}7^kQbE$>rX.mII<juXE<2qTTD22uTeO1-p]pllR:4[!hVcB,[oRjMyrQAM<nm');
define('SECURE_AUTH_KEY',  '|8#:wcoR[s@>r@V883$yUrUjMA3$bjXTD22qTeL9D*]pl]1-hsR:8!J}7vYYU73v-');
define('LOGGED_IN_KEY',    'V#w|odR5~YcC|7^fkN0v$qUI7^.ybQ3<;tiXA;xWeH5C_wpOCJ:sVZC!>@cVJ}3yc');
define('NONCE_KEY',        '*{+]thW9_5~dGK:t|kNG5~!vYN0|jMB3@cuX7y,j*umMy*tTL;.#p2xs95~--Z5G');
define('AUTH_SALT',        'GZncF4@rvYMF>nQjI{nbiL]mbLH]mxWHS5tWh[s@|lOgJ>}wVFF3UfMXAybmX6A');
define('SECURE_AUTH_SALT', 'vbM{,zYqfMM*iiA.;A;;maaH55tW9S5-~hGNC|~osoNN4@@jYY0z,uUfB,jqfIA^');
define('LOGGED_IN_SALT',   'p#ldgJ81wZrQF>@rQXAfrUT2{*fH]~xWLS1-m;2lxdpD]:]-[oVk1:hror80o,rJ');
define('NONCE_SALT',       '-[z@sGJJ^0vYjQfE{ArX7HAxuqEPH*<tLh5_;hOoRVG~:c4J[cvQ7MzvJUM7v,yP');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
