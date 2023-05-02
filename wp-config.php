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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sofianimar' );

/** Database username */
define( 'DB_USER', 'forgewordpress' );

/** Database password */
define( 'DB_PASSWORD', 'tjtfabe0b4ljfzjtygnz' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'G%H.@pD;P]ti%S5kjL(fR=Ne^1G<j%Ah!0[txJn6M@,WYrN*4w>y{qv$O1UDP!BT' );
define( 'SECURE_AUTH_KEY',   'ox2!0cul$!oIJY4W~wC<vygnk&C/IN`%@2;}P}au2P&YSH;?M!l{kq{a-F[=dDn@' );
define( 'LOGGED_IN_KEY',     ' MM4w`.}{]LltF*|>k6v-4>-}XEUL%&WtRL%SQ8?YxAB2^:NNS|SaTNhjS%lR @|' );
define( 'NONCE_KEY',         '.p? WhdW<s`3(?G[.qxc,fX2(y1;+FeAp)UD*}0Wjq&#&ai(x!Q&?jpmf_r@)}=G' );
define( 'AUTH_SALT',         'r.gbH>?6bmrros|EO*P4ED.w0BId>F9`Cz9**eriGQ6v]<nv^sPy@TftL2n$*f!o' );
define( 'SECURE_AUTH_SALT',  '8/H.Gg#:pcCa#MO3F,ztn9D(b7fN!lTFvB0O/47g]A v/,1^Ys7>iD/Q*:hBLRUb' );
define( 'LOGGED_IN_SALT',    '/M`o*v&6=aVz(aRL+7;2NyASTd;=XBB=MVN[Ap{P!j8h23mv#*Yn0kEE>[R|Dw`Q' );
define( 'NONCE_SALT',        '@{k>G:TE645M!P),;Jj^Ex1<)K<L)O@D[op$qa/67tti?X9(q?;*2*<R7hg$Q08s' );
define( 'WP_CACHE_KEY_SALT', 'R{|S2ZjN8`2Z-t$F6@ Kl2eN&/f1U]qeQj+@$!v=9NREl:cGpA.#CgXKNyn`}EK(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
