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
define( 'DB_NAME', 'ac-pascual-pf' );

/** MySQL database username */
define( 'DB_USER', 'ac-pascual-pf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Uf1843Uf1843!' );

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
define( 'AUTH_KEY',         'uS 3l!vO:K5K1jsOiy+?7@{X|p1707ox]phLt7#~e`LlUO5wJGq_u{<;V$DKZg>P' );
define( 'SECURE_AUTH_KEY',  '<E~zj@rM2L=]|pf w0KF;&6Qs>J!d),fJQxg$K.`[|o0Z:W8U7[!+7v%};QcPxpw' );
define( 'LOGGED_IN_KEY',    '.[k>g;4d7fPZk@s9(2qE~n >Ff QE{E7[SpuI(}HV4%y8H&r*RdQ7XTft:Dqs$j4' );
define( 'NONCE_KEY',        '/@d)AR`CXoO<RV7|~J>YE/LU:3k(8H2!ry2yt^^gaeB8R*N-s8>]ulNCpL#@ ooE' );
define( 'AUTH_SALT',        ';D4:;1+^&@q~vK,JT{U7yf{KU`rAw_ x<4qF%nf_h.[hDaoFxKZEvCrB)9t>ey/3' );
define( 'SECURE_AUTH_SALT', '5;>5<&dZYVn}^:jgg>ahYhm>x*7PKpf$B}Zcqbt!fI(2SUAy,oXxfZ_R@l+Gcmj:' );
define( 'LOGGED_IN_SALT',   '{}V }7YT{YQD&zeLs*VF^vRhaSLKqo8fq.nXe-7(-K0P_)G2lGO5zohHvZr90Etk' );
define( 'NONCE_SALT',       '1a9}Pi #N!?*O$@l~/VKode>~7P@(zi)DHv?mU@/r3f&Xk;SMyOye6;if!v-dRM3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf_';

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
