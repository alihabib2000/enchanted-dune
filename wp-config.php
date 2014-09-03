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
define('AUTH_KEY',         '?+l` 3x8T/&zQMV+rdSgr@D<,#>hazIHZ-i^6AhP<wzZ.n+R1%yCI)C2Hj%~[zx=');
define('SECURE_AUTH_KEY',  'AB$=ByPp)&@RMU0LJK2W`1TYreaNN-b|]5$`0<YM+zt_Z@q)+)i6Zf#Om-O:T[Ol');
define('LOGGED_IN_KEY',    'fKs2HV}8BzN5o*0|-1X@_IyU}}9qk vC5L:<hHBH0DZMd|ab]RIF|A9|jqSvTIvY');
define('NONCE_KEY',        '1F-&hIh 9(IQW=GEwy}=q0uWf!bT5D*8:bK3k$VdYLSWC^%2fcXgyFY5>[i}J(?j');
define('AUTH_SALT',        'O&CM -?m&=CbFFW>Q/ %}<cUF8^teP((U7y1lkA,lL=Wy@f^a&mI-!.V otH_1s;');
define('SECURE_AUTH_SALT', 'gKRZ6Wsg$::T;Q}`ysOE[)0KsjJq%u8@q|gbkrYr,-+`46=aeZ{yW4W47z,vhRQL');
define('LOGGED_IN_SALT',   ' (l[X@.>(A8v]q96]hlM| aN`TLO%v|)qKr.6,a/W$-*}6^1UeAUF-6am6]F9%t/');
define('NONCE_SALT',       'OY|DI=nmWy7<Ka(MxUF9D|:r/No)|{I@FB;b,q]H?NP_u?*~qi%1D!KZT)N5.L .');

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
