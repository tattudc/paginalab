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
define( 'DB_NAME', 'laboleite' );

/** MySQL database username */
define( 'DB_USER', 'weblaboleite' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wlb2020-f5cfaaaf' );

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
define( 'AUTH_KEY',         'V9sJE#Hxe$^DPZqXkD.8+X;c@Vvui(dI.SErYdP.T^F#PXX{(eDz<viJ^{FuBo~`' );
define( 'SECURE_AUTH_KEY',  '2Oi0Cv>`#=Ce-[9}-vdeq)3G>+wa`{hCK]C,i792;COupr)+%cp8(< EE1f$s[A?' );
define( 'LOGGED_IN_KEY',    'u/5hsp~,l/BT2Yv!+3lsZhDR:%*R3U6Kh1x=&G*63#%Fm>R$pTzjcH9E_V{ORh)X' );
define( 'NONCE_KEY',        '`C{m/0r`U7xN}A=21njdt:e~{t 3Lx6WdrrCC^0Wrpv%QO|`2_6qt7M+P!jzg5UC' );
define( 'AUTH_SALT',        'olwIlR&BGriwX}~Rewm,n>F;aV%wAT=!xH =t*?0vW lK`Pq#&Em+-i8plgy!,^S' );
define( 'SECURE_AUTH_SALT', 'Oy5CEL&3gO.3vJr]I9i-$8O]H4vXdv+Ki>0/{vHZ1k[6wAFMr302s/X<10meJZ&L' );
define( 'LOGGED_IN_SALT',   '?@}ze8j7zLC?i53hh2JpHNcD WqVP3DPp]Q4_xN^Lm_ST#$(o:JqFf|rD![c2nm|' );
define( 'NONCE_SALT',       'CQs4:BFSAN5`4Aw3:)PCk0rpr+3*oH|3_8YlNK#Yen)E@ 0)n=0>[V%SZ7Qs[9_%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpage_';

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
