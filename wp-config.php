<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'ankita' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zXNhSUk]m1f&ET2Hi;8gcaDUvuqG<D*U}.hl #1OqHO+`51g|0Q0HJQa85ws}R,U' );
define( 'SECURE_AUTH_KEY',  'AeRe ~Lqe<>%6Vp1{gu_,hRuT$/,DpR@v)(jNP1/`p;FJir2CqegR!|1N*!+k|aC' );
define( 'LOGGED_IN_KEY',    'B,]`<Yw^Qf*N& |on`|=KJ:!/F3vQN`,bvB:LB[s=%@[Rbl=AR85YxIkW5Lm~f}R' );
define( 'NONCE_KEY',        '4#]~$(aU%o:[S+.#lvcR!PU+iP.jjdw+~`BB]A/ghj*ibzKCu!y>O|l0pYis?B>2' );
define( 'AUTH_SALT',        'Na@M!O<@n,J:U`nzot.ByrwbcFf=0}D%Une=oqUYIxSu+Fhbo06wVc-&MA<&*7p(' );
define( 'SECURE_AUTH_SALT', '^=-*?4M<BJZI$o7G=nbDwB%^n+Lg4yf6J!3#Ic`  Y^e|-TZy$66okGT;S/h`<J&' );
define( 'LOGGED_IN_SALT',   '$`REn&N8kxo^xEns]8^5n*TP[GBZ(CW1ST!v8;}GV=S8J|f=z$V]SIl2tVtZ]9B@' );
define( 'NONCE_SALT',       ' .D~*W5[)H.Q[$AsSyz{({&|zeCT*7<7&yrk!-tYk1ckpE+4LBVIwKIs1IY[uHoV' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

