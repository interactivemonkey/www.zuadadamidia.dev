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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1H<V9& Q$(bx2{F*hn +$|I9&*=h_-6ps;SfQ6Gx^yQHPM2%@?u;PSDY?w.[a_--');
define('SECURE_AUTH_KEY',  '3r{^;O)4K]C2LNQrk$nG;kA$(|{o.g- Pgs- pF);!^>a+ad7q[U5+})KU(`Aqii');
define('LOGGED_IN_KEY',    '`n4j,(w4`HS[6#%e**p/j5]SDDfyK_pmxBO/uB>}mi|Up{~#M,}d[`;a(O*.H4jw');
define('NONCE_KEY',        '-h&|VhOSvf|8WLeuL-yG9@v6+`lJ!WHR:VL|&o@{q&CxV;U:C[ (H8-o7~E=yw[j');
define('AUTH_SALT',        'jxWr(rxVSF3,Za(.F~|-%`=uJkus9y5VdQ<#Zk7[zrQSr9G%|C@mZ;%o;%?UH.m^');
define('SECURE_AUTH_SALT', '[>}r(/VkS}N<_A~#Tvb?]&mN.@#6&ZAD:t-cedB0|W0#GqFjvvk-0_VLC-.4_84G');
define('LOGGED_IN_SALT',   'Dr{UY>]|Qq4Zzjx1xF8iJFpy0!N5t5CEs~KkUZg]KS2`#QQ3#jY]f|s*lu-vN=+}');
define('NONCE_SALT',       '|)E|-E-Ke^x+O^@e*NKF7Zk`~-sP<); q~@+SR+@_K1[:%l#)^+tw]@O.Gj!#g-V');

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
