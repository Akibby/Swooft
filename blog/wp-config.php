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
define( 'DB_NAME', 'swooft_blog' );

/** MySQL database username */
define( 'DB_USER', 'swooft_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',                     'y.fm 7F~SSOEbz$WP6?=t|P)nPsYEcb2:h^)^g8uZjY1Iyk]+i*kit~w8h_|j 2g' );
define( 'SECURE_AUTH_KEY',     '`D}5KV{:4KY|88[0*0!})ZiO7~O*#c[2F!u&rg$_Qx-l+4@9rHV/,3M0T}Er>n-u' );
define( 'LOGGED_IN_KEY',           ']b:bh![Y,49{vGUM%bJ75_ul7YDW#j&Wl$YsJI&C?Mot)95T@bnC[INR=*|5}&o?' );
define( 'NONCE_KEY',                   'P$r]h,nfGCzl/+48,(/&mLtfot@b;}|KZqv6kJ#R@/28~tD /BYk$(q</<~,$~Dy' );
define( 'AUTH_SALT',                   'fZ+q.3761wAQP4zN=[Y52%S02HTCw[1CISTDin;9Jwm{<Lz)v]K[Y>Knw~PT$c i' );
define( 'SECURE_AUTH_SALT',   'VCL3PHz{3L@Q[/ve_5>FUzT*p.x>/g:TIIj]^I!F-I_3Fd8m9XRp[/,?=r<`y[J7' );
define( 'LOGGED_IN_SALT',        'sSR.<oz7Wgx<j=|(QR.zP>xHgkxE.6/nlPh?4G6mN~aX aCySxX,l_As+XW}qU|C' );
define( 'NONCE_SALT',                ';hBZN,#< #K5$#~r;MkhtKzl. ?lC?Oyf^[T8WHRu*i.Q/lLKvT46(&00%#~$mn)' );


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
require_once( ABSPATH . '/wp-settings.php' );
