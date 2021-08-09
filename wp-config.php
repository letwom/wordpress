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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'A>hez3iGuoc CN7lkpF1uRF0]c*;_E1g5D]Sjt9Q0UL=,Ii 2*ZH4v;kX5QbCTC{' );
define( 'SECURE_AUTH_KEY',  'u6E 7$Ch|U[M|5*}n:;X{6;vv&srUk:c;$=Z(UTYw3M)!MzLH1-l<rCgwT9Zv-$~' );
define( 'LOGGED_IN_KEY',    '/]zcOX%<h. k<s@$cs9,ZLZbEso`W1Z1MS&#e%,l/%W1X|+CNWVE@XQh$,9r_bxW' );
define( 'NONCE_KEY',        ':8_B)mUni?@)O~L,9tl4Y^Hfr[.CnLZVK7I,EnIh]9&t{w[2`T;#I<bydf.I=tm[' );
define( 'AUTH_SALT',        '<e~5je?Ba@27`gI@(WyUklJ$-;F4$bE%Moi gV+TpN*ASU/w(ZKO_{oSZ!aVgl;n' );
define( 'SECURE_AUTH_SALT', 'C_*bj->j>8}-15WCa]T&Tp)cSlJ}0xB,mqcjRhgTDWF6)`a&+&{3A[$fwMa4G/w4' );
define( 'LOGGED_IN_SALT',   'BkAu`<PIazFmoH}a|IA,J8*IfGIFq<^r_!^W,+2D(x,M_$@pq`EW8Sl_jEq]#${f' );
define( 'NONCE_SALT',       '0#:vOY)nR9Tv0qnTXXx#ZV%;U])>y/2~2Oh0b&e;_zkKpsdB{iDRF9$[dgwkW~mT' );

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
