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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         'AC0Q,:D4Tur-Ig~+W(cW-1D9ATO]]taJFc~s8|~8;6AptJ^<GU?8P1[VeTsLBD&d');
define('SECURE_AUTH_KEY',  '#Oow+a6Y,sJItu>h!6,$`}-pa[Q(nUKoq |>0d3-ng<^;3m6X?gFoH>ZlNI;YL(H');
define('LOGGED_IN_KEY',    '4i0l-4p~U!~}6bG;!X93jyP}3;vLuvzRw}Eb|X@~Ep-.of|bsvBslo[O0a}@5%to');
define('NONCE_KEY',        'iq|oB|<{ccebtGo$MKR|=zae:17Px0Q-`DAyal)O7<+cuU&T%-.B/_O5Y<30`~?M');
define('AUTH_SALT',        'yTHc;u4PzGl%(yb-+KNW(-_u}pU^1QQt,:dXWQM|vz9aQb8YGAs-*Whxkr1C/:|1');
define('SECURE_AUTH_SALT', '+^L8-LQ^{- #,JvNaI[zFkr,,/:0;nMy=/;-qU[<Q+_3*uI2t9GbZ+7-r2wgsQDe');
define('LOGGED_IN_SALT',   'jL!&Y@.Mp25/+={+@8-{70h+j|BEOUk3Z 9h$q*{/wa1@ @T5>:;[,,[D+w$>d64');
define('NONCE_SALT',       'p{(a.WqiZhl;^R{J8uOF1zP`+Qohur|wy-0uxE|zYW30&U~aWkj:pMCXiz#)bI}W');

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
