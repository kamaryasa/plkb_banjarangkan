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
define( 'DB_NAME', 'ipekb_banjarangkan' );

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
define( 'AUTH_KEY',         'bf|CDKZcnsi]rA7/1_e>R:ZG@+x`/5qD*V{<56AyWXua>9OeERFj<281Q=^39A@Y' );
define( 'SECURE_AUTH_KEY',  'nh&?$#4X_(O5wp ]d=DhUkfqxLWEC(/=xiAJ:e[-r;p|<h98Q.aj_=?v8);GSfRe' );
define( 'LOGGED_IN_KEY',    '.E,3|fI?HV@C6j[hV }Du[7JkBFCBB2xiI?X(5p.w+E:E)r#u(Hp)Chj!KD(]&!)' );
define( 'NONCE_KEY',        'Z+g&(vFJG6FqvqfC.X~Ln{L}c{W`Ie07&<k#DQldO:NZ1Q3Gg]xjBTpb9>w+fZzH' );
define( 'AUTH_SALT',        '-k/pV/(!S@4sgxeV2yf$d@)^py.9=2cykNb5hSWwAkzZ$bI6,jS[%hopc[WY8z(3' );
define( 'SECURE_AUTH_SALT', 'S.I2:AcES7Hr}rzye72gbG.,AdpAEjdFf-~OevQsc1rQ!txbyDf6j!8N79~-a< x' );
define( 'LOGGED_IN_SALT',   'n,%quZTj$MN6xq[`U/1?82oUOkV&K@Hu4nr2(#[3n);LOUcG=5dRO# ~:596W>a5' );
define( 'NONCE_SALT',       'J>./[mU7aQgb6HEjRW&y&TC)*3cWa,k]xG`Z.2dd,CjK6q2tc`g{f.t]4]D#6V <' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
