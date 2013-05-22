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
define('DB_NAME', 'digi_wp_dev');

/** MySQL database username */
define('DB_USER', 'm9iq6x4');

/** MySQL database password */
define('DB_PASSWORD', 'iqp9wz7');

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
define('AUTH_KEY',         'KP?l5qNRD.vNGdxl>B6J4l*]eSPIH;F_8Fq/2kWc~xtn>%hOTle!gZv+R[MaUa*+');
define('SECURE_AUTH_KEY',  '{.Xw`Wb.o6.D]Iz0XuM6cr}N?8op3vQ{{{hk3Aep{HF-yy2|R8D7QjN]dgX/<r-1');
define('LOGGED_IN_KEY',    'Rf*|>4=CAB|Sat|X#DsV{K6CUJL2}@&7(U<cee+C{C@^=fpGxIB?%tU1qj.6:q2^');
define('NONCE_KEY',        '](B%Nt@e`ul[J?ZgP~:$3s<.frP&=@<D!#u1>-l,#*)&gzc!dg3?2o2{bs2-+G]!');
define('AUTH_SALT',        's+;YabO$Z?iT9-%-NZG3`F(19|%BP;{p~}$3[-}Pvz,9WZ-4X6l^5h>6.G0)%:G9');
define('SECURE_AUTH_SALT', '8@Nh|Y|C>k^ej&!5s+hX0V=ZQtP?JVZgo-(^/Kp-vuFNOK{osaSYJ2+0tl|j6p?E');
define('LOGGED_IN_SALT',   'CXGysU;{IrP7jw+;6yG~*m{0#n-zbu|7<P![(R95Ln).]SiXsP10@=ow)+(l%e64');
define('NONCE_SALT',       'O?+.|=/nF(v0D[=dU;e &gBmd$>qgNCg 55d~<o!+m&c pK!EJ8w;H,6m&*@.WD;');

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
