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
define( 'DB_NAME', 'one-page' );

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
define( 'AUTH_KEY',         'hAas*2QykD#,Ep;it =$MB$V.P_.2JgB7|)8aw-k_c8{-vll%{=RzBz?mdh@ucM ' );
define( 'SECURE_AUTH_KEY',  'd1V1{WynLvg,ToA@$QzVr([_3y(25CU+,d-H_nts}B]nyy!&=u:Mzo=XxhhpE|yd' );
define( 'LOGGED_IN_KEY',    'Ed`YpqEh?gGxIW ,=F Sp?]:_W(+B$6f:@:4wE(>mWN6ImD2r>U6bI#pP(oHs$/F' );
define( 'NONCE_KEY',        '*?==XXZo<7 kFO0BVp:{m~;e]0tI3^3b2a}3pR1[4`mk)k8T*Ur{|UZMOuq7V78j' );
define( 'AUTH_SALT',        '*`1V5XxMW+S9X7[1F@g5$0B-m`LeJj?//h=Zlj5)l?zdzVm;q5NsHALYT^j2_u7g' );
define( 'SECURE_AUTH_SALT', '%`S2e^D.dZ14P^1wiv>0{{cF,b<uTU}qh,]~)sMy9<.Co{_a|W`@;t*ABus)$:[w' );
define( 'LOGGED_IN_SALT',   'D.#b<a-}8M)O>n5egL=)6WBnoG&0yt]32Zjp7mqxVC41$c)NA0ipS<f25]tz*a;+' );
define( 'NONCE_SALT',       'SJA9q4y0cprK],Jr]dJ^UmT4@7fq(+m@h3&#JmrvLG)494;YyWuM_2hsy_du#`AZ' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
