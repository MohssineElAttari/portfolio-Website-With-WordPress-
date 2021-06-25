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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm$0?7w*U]508z8V}]U6W-J;eq~}6V!sSH)tS~1uq&7hMV&YaWM;Xu5~U[r@9fF_]' );
define( 'SECURE_AUTH_KEY',  '{#82@[GNR|hNybf}(92uw+}{+s]sscq@JvU=#P|MVkMI0f]LDu[5~e45f-D3g.$K' );
define( 'LOGGED_IN_KEY',    '_*u(!VnEfmq>QA0}yb(kn_UI&tHTnihB|{.jV:|s!i/@X8<o*`(7=bTRnm5dXSdB' );
define( 'NONCE_KEY',        'SUUL,UIn3Z8AJlsQM).(IpNv.,>ttH 3&)IjZ3Q]oYW 0Dr96ITo,G%W,u6RP;Q@' );
define( 'AUTH_SALT',        'KdNSaCcmDi2h(V:j&z3g]Li6kg~8U3Ak23t~P:n*z$2]rN}FTN>mMT1(=dWsGzHV' );
define( 'SECURE_AUTH_SALT', 'w~-;UU?>v1TTFJL~nX0Z`AGwjif!>m}i(WG8~=4Q9nA<v1`jh2yKYmD>,fS*i!DF' );
define( 'LOGGED_IN_SALT',   '}|%sy?y2=[89p_O*-Q|T^NT0S^s3D,rnv}9hubklLbN,<2DHO@xPLeQ.i[@R)8hF' );
define( 'NONCE_SALT',       'DO$upoXe4VGgAp4OV?e0Ec*y|4dl<WKSY?7%G)4f &T/cJ;[PUjH#.+E!:IBi{hh' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
