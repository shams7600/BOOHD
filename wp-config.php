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
define('DB_NAME', 'boohd');

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
define('AUTH_KEY',         'RG^)j&!^M$*%C}IRMq%c9;xo>tyH{#=(R1HKI.Kb6#nd6P1ZuK>7YmHI-UY C@DT');
define('SECURE_AUTH_KEY',  'ZBVrRF;GHCotwm.!wuUCdA6T706i:P?q9H_O=f3*qc82,-c-O4=6./rFu0AN:G N');
define('LOGGED_IN_KEY',    '_F}[B&Ag[[&%?9SmTZ.29B1YS5TJuhJD2B.MR&MU;.B@=)H2dlU2D[l-u5{vloUd');
define('NONCE_KEY',        'P=Q.mg8!ot9;$uDh4{TiK4AI7=KO=9o^_^G~w&</Hte`nmA_:}5g(ug=_})>fXUH');
define('AUTH_SALT',        '9D_m`=~TC|tQ[h+>w;M$B ]9:rDcu>yLa;E.8-{fJ53(d|YsCOJx*m8l5>/zFC-5');
define('SECURE_AUTH_SALT', '0sUdcUF~>1SH/z3I<4d=:,,/9mc|Lp0#9,gbMu|dtSN&dF27<KwqUhw5r3AVx-o9');
define('LOGGED_IN_SALT',   '(o}c*lbz5[OV>-#jy][Ja71#v(aOFBr@VcWF$*a6_:g;tP,3By}PHk*E7T:0)p6B');
define('NONCE_SALT',       '>7BCq8v5sW9:T]HvGc(@K8~^g-6&FoTO?-}y<j/n3N8sdu}P1AjxNASzubdgb5?h');

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
define('WP_ALLOW_MULTISITE',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
