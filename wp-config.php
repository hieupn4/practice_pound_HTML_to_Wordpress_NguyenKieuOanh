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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'NbT22,VNye|F*++lot.Ehu=x`fyKcjogKY(vu-.AkON,D(-Q(a<tW&-veH3Y}8h#');
define('SECURE_AUTH_KEY',  'K@n@V^#bzGN7/GK26pgzVT|Oy]Q1*/Ek#e%3S@AnOJMV qH#S#N:96x,(>:bS]5J');
define('LOGGED_IN_KEY',    '0nS*p>([/@ =e&0DO/1^wN8Q! yLBB@T?-q)M-(*~((lP%srr~LnU0CkjIx-|GIb');
define('NONCE_KEY',        's93O,`vQ|W$|e=[iw`-d-M7RFp]ENX{?<d?S!-,-`|K0<:,f=PJ<A1#C4lH}cpkk');
define('AUTH_SALT',        '407(jXg^LU/in}qLI*|^)iE`4ca4r>8M<Y(k#G7enDM,pij8ig>-U<G)R+eK.t*T');
define('SECURE_AUTH_SALT', 'N w_k%yE17DdncMeeW!7&=xX4ftAh(n9lJi-#&*+^/]Fnhwx+io>e`2&QE8L$uKm');
define('LOGGED_IN_SALT',   '2Qh=w;|$c@.LxKYl+y{ y7|B>.T9 O+NF?jx^yVG-0UFxn)VCD4Cfz8t^s8,?jt%');
define('NONCE_SALT',       'F@1De4jT)t/EY)%!xC|nr~-J&#n4.;-}XG]INMc9}`<g;Pm}eAvPC`Ts|?(2)j6`');

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
