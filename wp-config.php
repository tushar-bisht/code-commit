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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vqevfAzJvLEZDTiZ' );

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
define( 'AUTH_KEY',         'MqMVHAYI@N/6l~TmY_jP yJ;_ayYz0yf>eeyM] %6j|W$-@9:*@.Gq<DDM4qw7Q2' );
define( 'SECURE_AUTH_KEY',  'o&D-q>DE=FLaZcH%yE/Z-[<gN`n G84&=q27h+Ss*uE_V1d[|K]-,|g=C0e}>XY?' );
define( 'LOGGED_IN_KEY',    'oZ{!U6ji]&nD`zy&Y+D?L|z8?LxU()xYFQQu;_m4|7kgSX>S%Fji/0y~*?9e<B#c' );
define( 'NONCE_KEY',        'x]v]<;blq0._N5y<bD?ns=W[MC3d:?PN_D.4]0t&UxS$ta=%ZX8V:7XZR{j;3z#;' );
define( 'AUTH_SALT',        'oUP]80EH&sDH|ZHEiK{rZz10^0p6voIW6xup4HoV9@t7Y>Gm|_/$M<h3Ulj=f(/i' );
define( 'SECURE_AUTH_SALT', 'Qe$?^($#3L.&R!?IU?k**kbAHMw4[gf|UI+_;-u]o*m-UB:RpS<(ce|}4:7Z5un#' );
define( 'LOGGED_IN_SALT',   's:4JS<9vX:8=pW14vyR=XQ<_/xw3UR3W|]2ij.2($CM<XzV@@c!PHg&TQB2Q@{(}' );
define( 'NONCE_SALT',       '^w!^+B Y`v=tP:-V$)sCF*Y.jROel)G?uTT][1*9DI1l|ln_Hjh-s6`d=cc/NH]]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

