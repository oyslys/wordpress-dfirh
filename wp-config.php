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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9/OKTe%Oa?.s^)_6OJq4=VQSIUFn+fme*i@_8m=RE=P<@aSsL1|lNmrD: %nKJcw' );
define( 'SECURE_AUTH_KEY',  '#mUvO?-6RV07_3Xx1$E7N9Lt9#2IT9!Z9pN?iSx[G1,NWRZbmc &/0vGzEr:F8I#' );
define( 'LOGGED_IN_KEY',    ',*rLKv}wn]}s=#%w{T#pAKDI)etS)c.J=v1Qz`v6-bnFLG;oGyZ@&kUB)4PX*afW' );
define( 'NONCE_KEY',        'hMMuO<nrM+}`e^#|zc6y{JB$G68oHc0ZWdB&I0TJq=rU [=@Rj&t3j/>yJfS0JTm' );
define( 'AUTH_SALT',        ' h^9g^%`T4c}Si=GGOmR<u)jJv=-x3~_ZhZgm,s_9Bh;D;i1iAR7`7gkan,O#v*B' );
define( 'SECURE_AUTH_SALT', '&f[>Ey~2yJ8vG%~8DAz3f7K^(isT6S +R=&[md%fZE&YoQ%h_l$RTvuu<|<6X>d$' );
define( 'LOGGED_IN_SALT',   'B4)ICWyJJon5`UYG*#OEMP(eOL4[)8lkpjOh5zfFeX[~hJ#b7`7>Z!.sTzG(gX-&' );
define( 'NONCE_SALT',       'u0k0pxS(hNjb[r.b%8X{;RH4L>CwscgcSXeO~=W*k7V2*;IcWa2JKvG_J)Me!OR!' );

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
