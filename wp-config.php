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
define( 'DB_NAME', '3128500_rk' );

/** MySQL database username */
define( 'DB_USER', '3128500_rk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RKsoftware123#' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb18.awardspace.net' );

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
define( 'AUTH_KEY',         'MOflOB5x5yflHn-Bh`N!!OYa[$<n0Zq,&SVF6@#>H<]ne~w$g&B2jzeli:[McS|X' );
define( 'SECURE_AUTH_KEY',  '!eqm~a>9w/)6!|{-S<KfH D >eR%@;#fIo!*rFLpmU+g2P>A[%Z?$])?M=:i$@kw' );
define( 'LOGGED_IN_KEY',    '^(t9YXX1(eZ>%i|CA#_ed% 1C@OFjR{+jEfGeE0CmXb76)+t tuIkkx-t)7KcuJ6' );
define( 'NONCE_KEY',        'z3>^WXk2teA{)F[7{#DAn9dos{#H`cF6%@nAN6PoLsC mR0dQwV^jf1UlRu 5*t`' );
define( 'AUTH_SALT',        'zb%gO?>%GA<bR-UMBKmxxgJ]hqQAUFG<9Kf@wHoLjv.B15K5IJkEwg{cb+~ZSU|.' );
define( 'SECURE_AUTH_SALT', 'P/wIFs$ax$Sa3bhPI#7R&Z*%bD|mcj<2dKyd^Kw4DwXL<^tK-d5je|eJ.np!kIl.' );
define( 'LOGGED_IN_SALT',   'HQ>ft_[7tb8jZWgdA<gkMxn,E?nhpSq]8Zr,lX(B?Fyv%L0;A)a_SoVk5*qn/wA!' );
define( 'NONCE_SALT',       '9l!ha-}L}Eje:8;#iyX;oMl7rc]>|{pDH9l0kX9N,;MkDqMS&t;BG~%()T?B Z3i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ev_';

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
