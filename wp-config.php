<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allowwonder');

/** MySQL database username */
define('DB_USER', 'danik');

/** MySQL database password */
define('DB_PASSWORD', '1998');

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
define('AUTH_KEY',         '^Z4NwE2Z9.CuK;#4K&MUcBD}8woP`^9^1#`:`M~BK<}.q[`{=9EbXMJklAq$pGF3');
define('SECURE_AUTH_KEY',  ':.*w2;oDADRe]m)#Y ]9GG]N0^oTx$80a(s&XcX`8BhKM+O&]7RrwwV;#x9rt3z3');
define('LOGGED_IN_KEY',    ')Wery8neAW=)^p$}E9iH[pxA-LFBAJNNB#T1S+O8P]q2une^z yy)f5pdNK,F0N/');
define('NONCE_KEY',        'hq%;rj/-lNQfmm7Hh( i:a:JK J9yOVe@t|9}F2KLlU/`V,jCTj`s|tCY`+9r1K#');
define('AUTH_SALT',        'xl&d[Zn]16@2<tU*DYj0Fh< )/6;9E)Iwq6B[Q`O!-%|rCef&S.92Y!)a{Oh4X<W');
define('SECURE_AUTH_SALT', ' vHge29xD8W[NPX|v+>qh5CnRoy;xdd1~NKEM[;$o.7$]X&5rg5cUJrgwyz`Uf{s');
define('LOGGED_IN_SALT',   'Fj!S()7j0qbZ{hpz{@`7=1c&E]RiY;Ee;itJ%>(I?8CAgBXyDyyW(s@Y2~pEc:k%');
define('NONCE_SALT',       '++ }uVQ(!#.O@PS_BfI$Z;!)uWXROq.q:Lz*iI7^>;48/0LKNJ.z1r6;Y[1MoKiT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
