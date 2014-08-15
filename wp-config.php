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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'iR>%IU.&)&ZCb;NXdZ*CS4Wt` 9Vi^YT>Jg#jtPoo_ Oob|}3E1rooxD::JH7#lp');
define('SECURE_AUTH_KEY',  ']ZJ;vVDF}J(fkO*ft8+&+?xRHk7hce~p54+qr3TEz ^!V}8.>&8Z]IyWQA*Vx^-F');
define('LOGGED_IN_KEY',    '*|-Y/5F>Gw$0yqj]7|#m#&l%`TwKnuPf%K!1EuvJ7J;^s0AJ|h&izl-7X=Q6~~` ');
define('NONCE_KEY',        '0La?|[Pb.Aak9.C?/^URkK8sI,I.ei./!u6u};>LAbaJR-?R8AE9QM_2`-F(z3HI');
define('AUTH_SALT',        ',ve;H:94(VUKPM6$KT$ZYb+evJ1cXI2K:/.zYvZ{g`LlTFt]Sv&?zI)E_?v&vQ*-');
define('SECURE_AUTH_SALT', 'X?_+4;)e{=>J5!@=C~xC.m$3H yRL78N8jZa{RH3]-q4aoQ{C;f5luf|?NF<I6Iu');
define('LOGGED_IN_SALT',   'E{m7=[|;R>{K}5O_YKM&_1]YH&5U1w+qfJ}gr$]BjCX! d^hVSGYm3[2THQlesJ!');
define('NONCE_SALT',       'Lq>i[9H>JD]ht;SYq?y2PRdP<l(Bq:|q?76$a#vRK%pSl *r(&Z.cxe%Bc#0kx^R');

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
