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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'patientdata' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Lo;r3zYa8d8k*tc@Mv<yP|P(4TQ%?I,}c^e;g:_Y(65!]-P#o]$}[<8OuQW_Sc4|' );
define( 'SECURE_AUTH_KEY',  '<w>gn8A)TDS=)1llNh,:-+RCKvaOLRwoPQgro+ba!WS0&Hx0K`YpDr@zJAq.eC,}' );
define( 'LOGGED_IN_KEY',    'r{D~7l)d=~J|K;>9i?!FM=/jIY q~#V6[nF9TLX([zQ*C#QoEjP/UN|??zP9$Aw4' );
define( 'NONCE_KEY',        'SgZCVnn{G> *me}t:2s{7Y9pT]}jX9c[dPe6MV`tBWIKahtV<l7L%+-dd AG^.v~' );
define( 'AUTH_SALT',        'a?K5o5e+Whrp^>0<PT%;gyTPI.}mzG/#DJ[XA/*;8DEQ4+`L*7n3+iucpY@/~yB7' );
define( 'SECURE_AUTH_SALT', 'Spr/?C^X,jpbRv=-Z)tq{jU`LC$>.DV<Bl6iC(-.lCkfX3 iMYsfUt>?8)U#|5u7' );
define( 'LOGGED_IN_SALT',   '1YdHdFw.|9F@J- HwyEeEZHQy5dY339#zl00`lg_8TGAyVHaq+{w|ny&5>.,V[&s' );
define( 'NONCE_SALT',       'IYQzo_fqg(1 0@1~N0A6~d0OG*B~i;13gb;>QlC<B@#4]Ds.1YI$[uUes&(sQ<-%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
