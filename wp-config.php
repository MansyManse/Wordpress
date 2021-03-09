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
define( 'AUTH_KEY',         'V~&@Iu^5nYIKFY=4v5l@|GF5B7.4v@qlNjU0~|}-{Ng}Hy;hUgv]wg,;)-gh-uJv' );
define( 'SECURE_AUTH_KEY',  'LG^Kv+v?_1jU#jY:FzoJO6g0;CVetjPz&1Ax@hZ}Sd/DTfvEMW3@O.j}rL1L8bTW' );
define( 'LOGGED_IN_KEY',    'Fll-BnzKlBg0_@`IB%ARP9,`4%e#xi0)Ha:,Lb<1p05+O{H`$h|`?88mKw@%k[}}' );
define( 'NONCE_KEY',        'El}4<Gpl~44?SX 5Fa.[*{1fTee)#Y}J!/X6k.O+i7fQ~i)IJ0AM&t IB([;k)>#' );
define( 'AUTH_SALT',        '_~`r8u$28b/6}`#8-G9w7Nu=Qxknq@&s3In<agh;:.b>j=ihMxHb9m2*|bQ|4KcY' );
define( 'SECURE_AUTH_SALT', 'h-71QZZ2WpV`Z]%i<1Pg%^l9t5bcD|5c;;ESgSR9([GWTB?6OQL+]$zY+_(D)[,M' );
define( 'LOGGED_IN_SALT',   'ib D=F37xZH&g&)ar@U]H<g/guo;P<Nz^={^EdMK+5Bi;lUkOTJd61%RimHWmAvj' );
define( 'NONCE_SALT',       'X04tpY0kxIrNvWF:Qv3kkw*D=;g1yE]Aj!q2q[C9_T1ZcxobK%h=n?p1eS*Tna[)' );

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
