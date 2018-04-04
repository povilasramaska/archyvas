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
define('DB_NAME', 'project-1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$V FFirn[^VMPt02^T,|=8pCic)Y5^]:1g}!CiSY}-Y2N/~4pHioqu0O2N,V]5*T');
define('SECURE_AUTH_KEY',  'O0L>PvV]xZ})f/z@A qP*OYq@Scop8$,$LbY uIl<oY5M,F19``?ZM*FVk!6e3rz');
define('LOGGED_IN_KEY',    'H,0.>:p-0RtC8EO(:(=5$%1z@v{jrX`J#[PJi]itQ7O|DJJ$k9E.O&WAFE(/P<4L');
define('NONCE_KEY',        ']x2.4 Oc2f]db9c #p~?T}jhiAT&2r7xpWY~XtlRR!Y(q-Mrj6Z.[Tx;8GRbDJcq');
define('AUTH_SALT',        '*ny(ajK|@<wEKC0WmS_djhL912:B):MYOj!9%q2Nf:[|gpg]sHdMUVE+O@m#GsO^');
define('SECURE_AUTH_SALT', 'ad:zsL;j;1-S8l{:}9~6^2WMaZIEj2.FUM!gQb<)^H4tv/U4h^Rb,D4]U92P8ab5');
define('LOGGED_IN_SALT',   'G,_rZPG*W`v[5AO#r$wS.6J35^.g+j&uf*HDFhrG2m T5fDL5]j5]02XwO6)>gH.');
define('NONCE_SALT',       '5@nJO8$?Nm<C*m(_qaFL%D_flskZ7dMBl8^h2kZ{BmwbN(+]rj0$|,#mBg,R)1x ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
define('FS_METHOD','direct');
