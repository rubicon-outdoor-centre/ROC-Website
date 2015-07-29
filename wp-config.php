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
define('DB_NAME', 'roc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>Y N2r=@J8@%*598K%Rzuj %XTV(O<9UJ$gC@BJ6V,O}e 1!f`NgtT}P?PHv]U8A');
define('SECURE_AUTH_KEY',  'T5c9k{llNEEGutlUpmr254y@p;sVPs[J]*pjmwsM<lE}CzY0y2:07Wq6~,JC7s<=');
define('LOGGED_IN_KEY',    'M$AdK8o2:rKY9@rncZh[aa=(gr1e?;aI*C/GZX/HDF._)J<C,T*jn~u,$%0^)n`>');
define('NONCE_KEY',        ';:n25I/4C)+|gcGe{B^h8!T9e,UyQj%LTn7MWrf79o^l /u$t,o{ tnc~UGE&&eM');
define('AUTH_SALT',        'NOQ_^gAC$s[EC=oK3QV)x}sgQ$5#nid*2F#$!p[u?.@3^8xcAx6ic tRh#[K6]Nt');
define('SECURE_AUTH_SALT', 'SI>{i*)hgOZSP?^c.EHVR8fwB7mFZ:uWkq>WA0Mr0]GxkmF{T6jlb,SyS:QS3`+e');
define('LOGGED_IN_SALT',   '!ZAD~(5]QNTy^z,_Acc^4_!po,%=UvNg:$Bl}*-Zd%J4fx U4EJj/kxv/icWd<!r');
define('NONCE_SALT',       'a4R+S6aZ` Ia@ T[6uf1:_<_nFw|d;!u-D1`Jt8$pz&6H5kKZe89t[2 ^uu/jCc]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

/* Proxy */
define('WP_PROXY_HOST', 'proxy.education.netspace.net.au');
define('WP_PROXY_PORT', '8080');
