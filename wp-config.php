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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'f#(<Mh3{N(E86!,QF|oQ:T1q`Cypzxxo62#h#DQjXD=|EL_~00j-vl3|^AyK{/Ty');
define('SECURE_AUTH_KEY',  '2sc[[&Pbk|uu*9Ww=9LZe.QQoF)$lu%]DqsUY]z9$4#s}WX:,z$)I3pyq5`e_js;');
define('LOGGED_IN_KEY',    'j5NTei3W?il}0>8[1BAV+!5zF/tXJom1J8sW{?N}khL}5HXO#C5xgH2:4>m<``^e');
define('NONCE_KEY',        '~o3Ps(qM#m)qdAok`X+%c.i)ER[OT8$BU@/#tLKYEX4>zakjH#]nX3;DH:(tz{8N');
define('AUTH_SALT',        '{^&p$TMf{eY)e8!8WgAg7cdve^z;xI3Et~)uTY$@Sl!VYp5,WP06JZy3_ANHlJ44');
define('SECURE_AUTH_SALT', 'zQFbjtcr+x+!aPjcv-0O#?jEJ-J]slFQ{DG0u~%?3wGO5[pOYCr%XaC&$]@D*}dz');
define('LOGGED_IN_SALT',   '(+d0h,s~7uZ0P-?PyUrb%RaHZxeJ#j[-z+w-!X:/%693.NGqhHT=|9cKdd{Na$7x');
define('NONCE_SALT',       ']-.M~7`3:KY+.dwbI9darp{GCXh&hgO[PqgmmcqwLu*c~dQ>8v[.wwT%Dv,fYBc?');

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
