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
define('DB_NAME', 'mydatabase');

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
define('AUTH_KEY',         'HXrfwI7O2+P];6olO1XhFdNnk2A.*!u~GMMB`,?]5pqt|V?WRzX%]zz)aIuJOt&$');
define('SECURE_AUTH_KEY',  'oJP2VKzaS qCk}9*+ ]Tb-#LopL1OBOL6MZq:p,u(8iECzDD7aUlq{)R:-=c(mn{');
define('LOGGED_IN_KEY',    '2FX$/1>19X-Po<;./8:kWkDxFimO$D,r9k~ucat~5u,*#F&%1[nMvuSxSwWtHB#u');
define('NONCE_KEY',        'xW(3bnM<ohan35d!jKb%{B~G1T?zh2+KpAEIcoDh1Pdg}9F~JYI~Z41o8AA}~nX{');
define('AUTH_SALT',        '(P4B?+TRfL5>Ud<E^Q]:kKWj}Pgvw#!hFG.e9K)Gj-8teZO1_r79wh*V>R)F{MQM');
define('SECURE_AUTH_SALT', 'x+HH@zWcqN_^/KJq?8^`bjDjU9@$PtRy:T}an<!3iI#izGw@#c]p;|kVlcGRP~D{');
define('LOGGED_IN_SALT',   '@][5#av{u8{`^z>7u1cJZ/{u[-4SZr5@C^MOFX5=J@0Ry|YrJj_R>:+-M7`rRc24');
define('NONCE_SALT',       'QS>&18snDnEoV7<QA^I:aXM*1f2A9K5)pm<YaY@pk0G`:,#8Jj3IW9@1XaUAs}cc');

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
