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
define( 'DB_NAME', 'eduatom' );

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
define( 'AUTH_KEY',         'a-;zWL%l.d+#}w%zVfPp^p(,tpUB,;f`chT!y+AUcGAf_^7]5$-!ne2Fg~-MAcbr' );
define( 'SECURE_AUTH_KEY',  '|5fFsfI*SS&?`i+P04Dmrr3yM18.%[dw(%Z`{Xvw;O+%Y-OUVE#{MVcg~[IyhF9j' );
define( 'LOGGED_IN_KEY',    'A](jSZiVDn>q[_/-;uYxaEG;b$0P36YSYpjo2rf2mAD3eOXc^W!7#zm)A4G5uC3y' );
define( 'NONCE_KEY',        '3C&VJ0UNmZc$||is-c38}0O-Vy-VeRoIrB^#1Y<9^ahcR73DKDo49g5KSc/tLH7?' );
define( 'AUTH_SALT',        '%~a;TpCR [E3Tb=cjEG05{L+Pf5.hpyE:{.*S1iNj`/Za&$>tyG8gOZ@rv}616LV' );
define( 'SECURE_AUTH_SALT', 'kCWzJ4(LJ-z06!ny?/,) o_-{TRz1,<_A)k94l*tkRSe(qS]BMg-&vUp&7R( X82' );
define( 'LOGGED_IN_SALT',   '7c|HUVUKWYNBu!OjUj-R^emk/ro5M#a0gp_bb*LJ25!`YDm7$;e`#TlVD#*n[5nq' );
define( 'NONCE_SALT',       'x|{OkMyp.MM5dB3O_s VUDQ9g1=`[U$;P-*S]HImvaa@P.Pu3+K$@ScTHBK^I-me' );

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
