<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'analognxt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '=~H-t`T?E#UBtqhvW+vh9D:4VAc{=xB=nlw;QD[;a!aTA8eJD[UUz*^fAe^x5e.s' );
define( 'SECURE_AUTH_KEY',  '={yS;|VR4wNnGMc<G@iE[nB}NK$/f2D]j5?;r*?H}Wu5{uq:``bD&N&l+K7g3h)(' );
define( 'LOGGED_IN_KEY',    '08Reeze?5;Pq(^K@|;#Tb+qcWgXk{6}%9!0Y]]f#DTmy$O.ct7S^bw^Qw,S}[=A9' );
define( 'NONCE_KEY',        ' et?UcP]M.hx:W-/*Ad6t~:djj5=}1=}2X<1@Wp5qy=]/3|$]`6=XNwZMGN}/Yg]' );
define( 'AUTH_SALT',        'ZE/JK8s-sij#@dd*@=/ukJRi99LA]b?VmB.N3>p{Pz)sel#y+g4Q^T[d9f;-Vj`}' );
define( 'SECURE_AUTH_SALT', 'rG##YV$,@8ll.E%ei*&Ky;uZ7.A@*;adIoqI,iPu]3QsN8}MF48d>6xlwDf`6yXJ' );
define( 'LOGGED_IN_SALT',   'JK@,&b%gR)5[DBVq:*s39kC//3XKfQ@nNj0&kZiiln>pm)qm>@I3o.u&6jLMHUT ' );
define( 'NONCE_SALT',       '5inzG@/yy|wtR;mT.kLy)REWa~^[ Y{)De=s$`3S<4D^QiuVMg1@cgT;[FQwRKz*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
