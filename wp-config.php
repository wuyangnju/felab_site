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
define('DB_NAME', 'felab');

/** MySQL database username */
define('DB_USER', 'felab');

/** MySQL database password */
define('DB_PASSWORD', 'felab');

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
define('AUTH_KEY',         '0u=BC]GoWg7?|-YyKeuD55un|q!(yhu*B_Pm#0<.8Zu=_cRcF;}NUV),|ng2/O[}');
define('SECURE_AUTH_KEY',  '{AF4K%=.gQ>dnD5xTGy;f/.t.i,[k:<B*mF)uC9>=af3^s@(Y&t[#YcOp}-)R5K5');
define('LOGGED_IN_KEY',    'nt)!w=zFQ:(aVL{]{e*+ 3AHH2YwZgmp7I]d8m6eAbsdnitV6<7AoUfj8%;[~Go,');
define('NONCE_KEY',        'GlPmN!/HvV{h+Zv#9-:-GH_l?|t%|SifsI.x]rkLx{m2:}9/02a!p2?~gB=8X)We');
define('AUTH_SALT',        'ecyG)MsACuQ<]ep&VZSM)fyP%12,0{MvA+N9Yxn~r5Reu/O9i!3U|K#3JYNBz<d#');
define('SECURE_AUTH_SALT', 'Qp9GY+@ZpN1 NeA2|1I$qc|T%i!.FI;zc|?|:qKRI2891BDyFj!>%&81[`Ks}{E+');
define('LOGGED_IN_SALT',   'TjG{bd/dOzGb!w{5~s?:#D?Rb^J#>`<]Bfb^1J!R4d5v2D.xo/qn7g$hB%R>8kib');
define('NONCE_SALT',       'uz/+60pv@7h5<r0UQh44nUZQ:t?C@/skXO:7q ~+;LLB(v<s}iM-5{0hb<`!HiKz');

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
