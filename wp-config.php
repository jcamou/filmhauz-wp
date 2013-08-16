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
define('DB_NAME', 'filmhauz_v2');

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
define('AUTH_KEY',         'UQ>W]j>970+|/=QPD2:1^wK+rjOAI%2mdSk/Ge[to`Vo(>:qAy9L&kAJHEE^Q?nK');
define('SECURE_AUTH_KEY',  'VUOiPL-!LR!K<}sJ#c]b^<V|_J@#>a In!V..}vX|`)eU,p;6`x:]XG |J9,6|$9');
define('LOGGED_IN_KEY',    '+lO[Z:d;4*$+j/s4Oy+z`g-li015R;<nd~k{KTw.Wxv[gov+UZ|]U20*?}<@e3!d');
define('NONCE_KEY',        '+(K+FY+<WsIxU8n<//U};6 )nn(;s+0i}(+(>v4d|fWn,[wWHoR7pM4`-f2ZtU -');
define('AUTH_SALT',        '5r4 vP9@$KY?yKqU*ZIn.9KL._3rkG!B|;@ph$H>#Uq|bKXJGC-/q>yOE[]_!<`G');
define('SECURE_AUTH_SALT', 'Rby-.t5{77hfLJIdLae9#MQ@+qGOLn#p#_%K:|5[DlQ++O^A.ytlc^qQ7uIo*3#N');
define('LOGGED_IN_SALT',   '_[qLY*=/6X)@[udStXx4i0zPd69-l5pQU?-K-AXtlJ((dkd>3Po@pHne7w,9Vt${');
define('NONCE_SALT',       '0v(5:-S+Rwo5bg>Mr^[TbOZK|FX6i(-K*+~HX&2kV&BYi{iF$w1=$k<5M>dei/e/');

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
