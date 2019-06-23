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
define( 'DB_NAME', 'bdzion' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eC7viUicpvSYfm1lCGWU)cZGv[G`$G3QfuQ6FCFh#b}[ppGl0LNIK/vWi@AS?Br5' );
define( 'SECURE_AUTH_KEY',  'qCL%<bpvHkqzwy~)jxAeb/xO@Hie!mYLG-)vfP#=|xI9;s~47<`hy%>gglSK)Y`V' );
define( 'LOGGED_IN_KEY',    ']8vDJE*ym66Qsk8 H(V#1CwThCYh#]PT;I6&9raf8E!IY7dq8mj8];F5juT&28*T' );
define( 'NONCE_KEY',        'kYB9#^b]QWX;Y#0E8wnA|U>6/yH)IT#od%JPFT^&uCIP{8~l}~*[{b$>{IS^DqpY' );
define( 'AUTH_SALT',        ';+/w)dJ{j~k_-B(Tp.Bf_2(/2-:^RdFy)(Qo:mxB!)eGFRY3ogl`%)T@eAC>HQ)/' );
define( 'SECURE_AUTH_SALT', '(x}v0)#o<t[7 ~bQXQq_hk6{oXv{Jx3i/&)H#7^%`3D}.ba JT`H]^SAGYzD>{+m' );
define( 'LOGGED_IN_SALT',   't/2b2#BI?ok8c/a)El>`~j{MMaD<h!X]PlT?1;w0Of?[$ZE@?i~{T?= %n7.{]Q_' );
define( 'NONCE_SALT',       '_JDMZGi!JF7X_ Q8(`*R%c_`j(K|:lI~@*i}q<yZ3D)y1@1]_)IbGd`;:I]r<d2)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
