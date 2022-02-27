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
define( 'DB_NAME', '5k_ads' );

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
define( 'AUTH_KEY',         'TR##@}=s~Y&k&F{siGwHt`~ZYFzK}=8>S5&RP?H;Me?*cojJTpYZnx1tgU [zoH6' );
define( 'SECURE_AUTH_KEY',  'c$L/ZY>N[J77PL7lyQXin@y^b=uax8]b`*Hw?$^q1D+]Hv5$oxSMmbS^+,~6<<Q`' );
define( 'LOGGED_IN_KEY',    'H1HBc.CiSqf/eMd&3*MK2qvU?jg;6!.gVj`Gs}hB}dcLPx>=.AlD`NHta0-(77+`' );
define( 'NONCE_KEY',        ']V3[Idl255UQ$J*`;],vHZ6{,5<A:n%/pZ@M!*h%Ir#/AmM?PYqKHG!LW$ ndOH&' );
define( 'AUTH_SALT',        '`ED0D:xjqh/ZcHUXU({_ih8K3,K~yYL;)Zp$]J_}&Apm;u<u]IaL8!<_@1D =2zk' );
define( 'SECURE_AUTH_SALT', '[:@y|FKifAbg~h&1=RpuHz5kohQ#?dz&,p9({X$tF+vh4Dk5yN?Q2gFzy]p,V@-i' );
define( 'LOGGED_IN_SALT',   ';}4lx}&>~FsZB*C{r78C!Gj{Y~*05YNpwc<~Zp& |Ldy?T@[M42aGLVl@@sd[`T8' );
define( 'NONCE_SALT',       'hTeP:I3ba16Y+Hr3A;Y~S}/LzA};dj.+b1,;{<nc_G29s9]9qc!XD!YEJ6A6{nZ_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
