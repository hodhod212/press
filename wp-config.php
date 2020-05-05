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
define( 'DB_NAME', 'ben' );

/** MySQL database username */
define( 'DB_USER', 'ali' );

/** MySQL database password */
define( 'DB_PASSWORD', 'silikon212' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B%1YSJ5366JAX$4_QVj^bxd=./:Npy*3&eTM.k=*ETPx*z  yA`X%$Wox$IhZ{vl' );
define( 'SECURE_AUTH_KEY',  '76{eCC/{+bm^uc=D[zc4T,OCV61V1#.dYo1tFt}OIF3`/t#&W%a$k,~R[V:U3Z^&' );
define( 'LOGGED_IN_KEY',    'xZFA%7|)|d>sfyOl{ yEXM{s?Qbp0/5#c$1=hEF-k^fCFUy(H5W81fWqmwre@kWw' );
define( 'NONCE_KEY',        ',&h`]EQretw@)xQruouW7-CkVZw ({B45F0F%F7~*9cC/&tY <nbGw|;1DY+(nOL' );
define( 'AUTH_SALT',        'Ydplj?v5DW`]3:s]C@W0%ek{ydwbf:?glW!!evc4^9*YE`%o%+&d3*G4jyM+#x+W' );
define( 'SECURE_AUTH_SALT', 'Bw8AFPE M0WG?FcH6^K=!7|{yx?/oktW`u~rDc;2soc|ur.zZvHx5W<>,=pe>1<9' );
define( 'LOGGED_IN_SALT',   'BkWDRBC2vj{ShD;q~O*exCFS%$|Do w<bi.GYW&sIyFC6P{qmApCLjSJmN2]}`wT' );
define( 'NONCE_SALT',       '?dZb_LU=ed[Xw^q<gLqMgngE8%KTUMaOWy&m<ja?4=aSb^^bLZOs|@6BNS&]SvX|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
