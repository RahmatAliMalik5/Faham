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
define( 'DB_NAME', 'Amin Enterprises' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?_ao3<zK^Zx7s}P 3)/rDG).r;`)UbQXr7VHN50?=z>Y!phZ(3`d!,hB]3qr)z;z' );
define( 'SECURE_AUTH_KEY',  '{nw~hECf-U0pC-!FL]9%f|W|?+2xN4D&CIwOX;Y^NM.hyO!7i<881y?Gd4x2nk!b' );
define( 'LOGGED_IN_KEY',    'P;_IP711sC:9U,@NW$]q<W@U]6c*[ur2(;Y:{f]b tTf{-epzf0PLzvZt~TK>^J6' );
define( 'NONCE_KEY',        'dK6%LWVg7YJq5r|*BM48!Tqm@%^QI5.Kx>}u:>/b/{tF=-WbirA<D}QobVwXE$y ' );
define( 'AUTH_SALT',        '=f dgcZZ,PHY#~:Vm-H=DHm}B5R3}4sy>%eo`1,{)+mVUe;`<eHk> 0,!6L~k5FP' );
define( 'SECURE_AUTH_SALT', '^+}Z]r],G<y4|1x~Pipq~DH$,wU]mFJO>_t+hC}Mzul]O?GLbmIG>EvLX[7HF?,d' );
define( 'LOGGED_IN_SALT',   'kE>6K,C03jkxjv~m1?eJj4Ny8]kat;1{28nr>^P!9[zM{pl]y7IvulfPw6,$/R7a' );
define( 'NONCE_SALT',       'D.thaEj0k4ciC|<VWitv3q@r@-Fj,WKP7=`v6]s2?}z-;a4k~E(@}G}t7Ftf4P$S' );

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
