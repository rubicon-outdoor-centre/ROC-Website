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
define('DB_NAME', 'rubicon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         ']N%U$I)C8w< ER}f]Y7fbKx=.q6)-deFG;DMplvqcpBuLi;Bfqn[!cpkn-Zye7=s');
define('SECURE_AUTH_KEY',  ')a8{Dmfz&m`Fa93W}m~&*g4vl8=G?+dK?HMYz+mOERs+6jh[~x=]DYH2hM=|X,zi');
define('LOGGED_IN_KEY',    '^Y>2boaK{K{$?8<e^m= mUa!)PxFb0#P@nPq^KM@req>z&:I0sy0fLXF+k+sO30*');
define('NONCE_KEY',        ']hj_U[[4rjm>7PmSr6_qEFkw9o~G=Dpw6$j%t}_Q7.&+DH)yD8YHgE_3u`NG|fJe');
define('AUTH_SALT',        'WA{TtC.kBjZFw1=|&i/lsNVc7><N+@YL8K,]l4baDj/cc;#~M};aABSBy{KJ-^OJ');
define('SECURE_AUTH_SALT', '!sW]9h1EP]t%&Lbh_FBm^V8E8B>6ZsR Dtni{MmbErFPcH{>,TR<2&ui8,5@YFFH');
define('LOGGED_IN_SALT',   '/Fx$!sd-GP*}N$!gY3p{Z)Y4`yhfGh*6qqf&1=cG!IE[g=^^3[NGy_G{JGazI(;z');
define('NONCE_SALT',       'OZiCBhTipK&f]Wk/(ag+e}B=BxEV1FH8M2Y/?k`@-7KT5:1$Y#{X:F1dh;*2.XVU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rubicon_';

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
