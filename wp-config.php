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
define('AUTH_KEY',         '@EC_nG/Uwu-kH*t{+}RVP~?%_Fdm>pvt#@%bLkH)@7 ;l=X)0vyBqchJ/Ix;YdpM');
define('SECURE_AUTH_KEY',  'r+5nArbF3hS-9^gWT-OU{.=z*hqsZC|+R rD%!9t-S$&YC$&^L5)>m-J|uc14AOi');
define('LOGGED_IN_KEY',    '|/|^#-r@jrjtwk:UlTj@dY^tzEMX+zwSd2I9N-yWX/=*ztx38CO5Q,)yVNR+kl:r');
define('NONCE_KEY',        'tbe%+$|Gdj)BK71vM;?N5-jH|eq{+m{oD<s?r887TYoO&[7a7p.+CG}&v{@akaX`');
define('AUTH_SALT',        'FHFc)gQ%)9tZMj)%wa+oIhF^+OTeGP6D-}hBu(#-{HpXBB*3Nf^$Y1Z7|5|nQ[)B');
define('SECURE_AUTH_SALT', '+]|b#B.*gKEb#D3X<1F-Jq):*[nB0ZO~6lDaq:&M20.JlLcTYP}q3EI+X|U,@R|B');
define('LOGGED_IN_SALT',   't7aQpdtr.,]U3-i=wLj~;]|Um>tDi%Wprq@`$01$PFu=yf@P&B6n5/-VcIc<+L<m');
define('NONCE_SALT',       'd:+MYGX]-8D;CL5b$NxCNnhLe_sd^73[sC[T(~Hm P0vms|DJ^@|2Yo$evObnG$A');

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
