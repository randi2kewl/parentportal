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
define('DB_NAME', 'aps_parent_portal');

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
define('AUTH_KEY',         'DKu>I>*Y72Iv}R=qP$TK(Tmtr;,tfu2,_5itA8YL%$3>z-+rd|4+%F@+78nh&9%J');
define('SECURE_AUTH_KEY',  '*Rda:f/tl)e[PNCJyX>+v[bwz{p~RaUlA&`::}uW-XOtP+$1{_{CY}1<MQ%c9Q7[');
define('LOGGED_IN_KEY',    'tftZs2QwY#(Oi#F=@FYG>-DWb<~_MW;y/X>=y&$cp8=$-Mf.mE`EyyR m.k& B:#');
define('NONCE_KEY',        'lf^*>082.1rFb2}72$q|r!7|{+X1#@YTOHmiZ@)|!|l9PN&y~h&1/r{g6]-[MyOh');
define('AUTH_SALT',        'B|szI#Y8!VW5!ph~wAE*}(h-r!8>:P<~ J~L,g*!%PC:ZW&C^(cRG<r~=+7~BgYX');
define('SECURE_AUTH_SALT', 'A+9EGJ.[rj9G*_GlRLoGQ#R`1^WIX&x6|x#iqe]+j*XX0Zbq6Ze{Ialb-~pkq}|^');
define('LOGGED_IN_SALT',   'V?uPBj`?YS<JP--5^^RaW?S&LY*)Y>{{n)UUauW`MR+kGd3A}~kCez]mFqXUMaU0');
define('NONCE_SALT',       'ogT~Vbu$aN4*|&$jLI)uL?Epwb)=t)kS2uFPBV5O`aEb]OBpqi/Z[?p7|h8mO/E>');

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
