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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'WS&Ui,eO3o}yhC}v3/b0J;WwQDAx}Nf!0&`u~!2`zDxw.YBGFc#=L8wv-VRIH=uO');
define('SECURE_AUTH_KEY',  'Ly#|v=UD4!uR]Mt=ODt6yUX+H>~, xZd0S{*;($$2K9jra+-HEscfWL_a+.rbANx');
define('LOGGED_IN_KEY',    '0Q&IY*Aasn-:xa-3)T<cnnP;o*,vFhw2Mf5C0)O55q!NV@M4NpIz+Jv^Fd|![%f`');
define('NONCE_KEY',        'e48X q@WLB #%gGw:&7o[`_V}]%&e!&ms;fRCy%|bc_W>u0T]7*~n2/%,P5zVT_Z');
define('AUTH_SALT',        'Ub=8<Ui.c6PGJnmXpHvr9-*=]c|]f=fO<=!Br-.bA:y7,VYvmcLl3?@{Wcsm)+dO');
define('SECURE_AUTH_SALT', 'RXWZb=Oz3G!Wn-Pxo[RWo|xxS9SuI:Co7X$f](!OjOVXUn[?nlzY|El)[.{usccV');
define('LOGGED_IN_SALT',   'Xz#aPWG~%BuIsL2eoPruj@1@pXChHdO5DBay}b13),!8[QV7&rK4hWYOrVx[^3Xj');
define('NONCE_SALT',       '?Ar@q~ %fE<IL}|thk]0qO]U0imYJyBg`.@p9Y>^4eCWvXn(X$>8YG[W_AXJZW2V');

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
