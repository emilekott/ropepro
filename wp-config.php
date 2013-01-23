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
define('DB_NAME', 'ropepro');

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
define('AUTH_KEY',         'fDOtm?2HFGI2djQ4b&cxc<j#.{)uNV_>u0w<dNG%TX!pw_e~7^Bn(TcI_eL~1:~A');
define('SECURE_AUTH_KEY',  'JRU%>OTh9Y[G2oct`B[fa{FAunkEd$_-$:~b^l8!/g2I3PQ/@I:$WPImI`P0t939');
define('LOGGED_IN_KEY',    '=vU4nW3[`_4Q$s}jqBf]GL$IPYCz6l`/^yl>k~=C^|OB[{-?Cm=$@Pe0/I#}ykN$');
define('NONCE_KEY',        'P.|Fdh;H_9XM}@PBBRCwky-g~^lLtuYfRFR6.fiA20mt?%qz4)ZK=SLORjPt>]jP');
define('AUTH_SALT',        'U1H2^HIW[JO+<d*hFO]{oVtDEo&qmNvMqEi#5>OgpXA^3hbcV1u1e3ixo{IVp<92');
define('SECURE_AUTH_SALT', 'abQZx<#x`^=~kR$:na8CD_<OHOLZs{-f)G{7fxQ7u2TIa;&#%cnY0qYI W6J%Y4)');
define('LOGGED_IN_SALT',   '|3MU V1j /}1,<A0r5*69w&aYkgz?^+-T1VH$mXXE$I)r1JFPc0rWlc1ny9 >Ny^');
define('NONCE_SALT',       ' 4vGHM#As7`$M.n])Or-#}[Zd{yKSg3?H16gJ@%}=@*c)]dQux+D7oZt;H!!5L L');

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
