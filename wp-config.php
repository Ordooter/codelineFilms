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
define('DB_NAME', 'codefilms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2e?ciJk#vH}+60-^6TE=J1hnyJ9m8<dD}c7hfc.q^-Zv`Rcpo/ LQHN#oBlxC4y:');
define('SECURE_AUTH_KEY',  'o=5-19m6KcbH[?[J:n5(-9~Sc{C6;7n@&16&FnA:NccAxlihj-a~GLy%Vtn,W}_i');
define('LOGGED_IN_KEY',    '#%n4pgEUCNEt7)-F>*;L~]!=0GMq)K^NE1-03/wyO@ =T*4:~<q*,]/}(D4~[QT7');
define('NONCE_KEY',        'A~!7`,GUs7T5<TFBC0=O4U!`V9bcG|O_A`d&c9 gbCY3+4MKv9?.BX93h@_`K&l_');
define('AUTH_SALT',        'l7apb_SV2AW4SA?q[B6.VBr[G&!^il*{yg>4y%cgCdbZT38?+IZNGD$_5xa%ut/7');
define('SECURE_AUTH_SALT', '].[u2Qy6`PpVtW2QT[.ItpjJTF:o_vp1VttHKruQP6NvmSY{L[KN5):7[^g|5Pq-');
define('LOGGED_IN_SALT',   '=~f_C$N~1 5)qYJ79B6/=J?m: Sn(5>YLL6da%kWE?|*rc`-iSO/hqeIjGKu:Xmv');
define('NONCE_SALT',       ')V3]A9!UN&Ggi/]t6t,=Xcc9M2syOAnx)5w-tMwvR.~iC.5U$Mr%2tc>)rB49LI8');

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

