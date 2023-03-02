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
// Use X-Forwarded-For HTTP Header to Get Visitor's Real IP Address

if ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$http_x_headers = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
	$_SERVER['REMOTE_ADDR'] = $http_x_headers[0];
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nhidong2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dr=dtN0_F5!Na(p&o}kq]:UDG74Ud0$h9 DNPe5~VCG!lgq9JFzOlgVy&eyaBTtf');
define('SECURE_AUTH_KEY',  'tjt;}0LuWLACTqQt7GaU8-0 8ABldJzh_E:UWdv[{gi,wKT[+A{izw_A!lZy/d;&');
define('LOGGED_IN_KEY',    'u4pArxayMHdmHd/Jd>9m~{*VwxPv3w5G!N)g,X{=U),L]jSlzgGV#LHM}~@F_6(U');
define('NONCE_KEY',        'FB.,Qj%zGk,3Q_5=1<)3tzXJ8{{:W sTKB_WVA5V@iq<$GFFfGy_b+e#8M(P+j-I');
define('AUTH_SALT',        '.uzvBz@3?Cr,ZiDHvL/OIyJId>}AA!rc2)jVq+FmrX+p9e6:- Mx4r$wnxdl3fa{');
define('SECURE_AUTH_SALT', 'ms:!G9Lc?+1bByrnBGZ5>lrV5*C,pM1e1kQX3f|tpjyitZR|,SP9f@Idj2XM+vWG');
define('LOGGED_IN_SALT',   '.6XX@&puApHM#?9Tne5{Fas`Z*Pa9ZnRD(S1IA]<_l@|wfxqCF<D>bswPN85?kw?');
define('NONCE_SALT',       'bQG[x m[n4g~UoZzxt,AV,]rT|Y8rHV,V >BZD-}?*lf1XJ?`;B$x{9htg+,-G<y');

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

define('FS_METHOD','direct');
