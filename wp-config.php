<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blowout');

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
define('AUTH_KEY',         '.&*1j-+y=K?~Isl(0$$)||EA4QmlTcJM,_+]hVfQA($/5j-6lf?{.-!vA-ws6ic=');
define('SECURE_AUTH_KEY',  '&AONqhkUeG:gKzOb-f0_fm(-:t*ZFFa^XG0c`z:PBI+@+=j+!&@)I1~7<m,<)[&C');
define('LOGGED_IN_KEY',    '!z_OfCJv(7Qxg]nFFi-q<4^yns:$b9@%/Iikw5g*|P9prWxsXnuT WX.*j-hn%+U');
define('NONCE_KEY',        'Xz-A|`JU-|Yr`h~o;t;M_6N!/:2 e3}L&-C#,m6&nbFZyJ*M$zm$TV^9yc:+q@?p');
define('AUTH_SALT',        'wEg<A2k!SpWvLJ[N&TiAb3K]b-$}D.95Xdy-]TF<jMmSeFm2j;$Sf.8|;+0@&]u_');
define('SECURE_AUTH_SALT', '{-D,b1Z:d5.#v5h,?e WVVQrBl*.,>V`XzusIDtGgQHz0W}V@.gWN!25H?slH{H0');
define('LOGGED_IN_SALT',   '54YslKZVne*.5=D5L-8-*WlC3~o]g+{>byx8$JJZ!+D-E?od5dcTk>H)pa .?h09');
define('NONCE_SALT',       'O-OE7qc[STAowz~U=Qb@^K@q`}rF@+*R1z;WH=KqJEs/1i_p~l2)|7]WVg!456k>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
