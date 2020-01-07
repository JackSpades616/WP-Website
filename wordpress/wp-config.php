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
define( 'DB_NAME', 'wp_website' );

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
define( 'AUTH_KEY',         '^fGZ?k}%pT;3/31#YKh<S9>7ML@(tsQs5Kr$!FVgZ8+FVH6P)2]on&k@[L(tjHE%' );
define( 'SECURE_AUTH_KEY',  'ErV|=eV>VD7|c.c(?hta(|?+YXK?!.Tlt2ny$ 0pQP{3$z5a4VAO~1*trQeYYqc9' );
define( 'LOGGED_IN_KEY',    'HA8ynXLlUEO|23^5dZ2i8W`{-mTMd^.K4R)[^L.(u,26W)5:=?5NtE;MY/<?dg;C' );
define( 'NONCE_KEY',        'O! Z&vY`9=rpTY^sj!t3Z}u.w1rghCLJX^K;o|!,}ebkTG7~y]<WGV0#qv,4//8N' );
define( 'AUTH_SALT',        'z?qXF3yX3uQvw)2>EGshdJ>}C}%T|M>7pqZ+UZd-y*mYPQVVf?_UW=(%iQRua2ey' );
define( 'SECURE_AUTH_SALT', 'X;5FvQ,N2D3]@sB|0wkKJ_B85wdU&mR 4=k(S={@P#Q;?GGuH(q-$0 _hP?F8a(F' );
define( 'LOGGED_IN_SALT',   '<X]pHi5_3$)?&#X(CZu>iAiwo>:ULq$.a#p4`{NJ8c5gjO]@ 0@D<8Nk?rTzF|UG' );
define( 'NONCE_SALT',       '?wnWuFH?+(qv8u^hq)|PyFY2N|m6_9!?u:?R ,)7]R}t{+~~E4hp6sM]vR]f*/_n' );

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
