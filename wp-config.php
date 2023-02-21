<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'mystore' );

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
define( 'AUTH_KEY',         'U$hq= 153|e!(eYZ}eS=.BWrgU+&T=n/:AhAM1jd#e9(.aYk1e2V+V?|Cs-k~2_L' );
define( 'SECURE_AUTH_KEY',  '21?u;gN3_j:O,6jH41U2gDAj1Pdgmw?/t ZZv >2Y5,.VR%8vo:gn,jr0|%vNT]`' );
define( 'LOGGED_IN_KEY',    'w8R&B0AisxRt%Wl,~+Cq+*%z%fW26X_7AHWl~TZjMs<Qd7CR8LNE#W5X rKrG(95' );
define( 'NONCE_KEY',        'uar5x/e,PnkoK q=a@tOq{H|Qjq2gt)5qVCN;G0XNh]kBa3f#TLJ>jN::OeQ_y]P' );
define( 'AUTH_SALT',        'yQ6*i]EFQNB+S),,MZ{D)TZ]E}` c{2%,n;dwlsD<e%JKJfma)d)5)n-qvQ?L]fA' );
define( 'SECURE_AUTH_SALT', '*+E*Ne7+Ua(8yjOK7FX4M|/O/ENk`t7hb|vd;}T?#HD7hhLjMV@+1!Z)0S-TTs5C' );
define( 'LOGGED_IN_SALT',   'dsV5O5nCLMp{5;n4KDrvc90h #q!^zuCG7RZ|Lq*rV>d.~D+uY>44IEmzKq_w[MY' );
define( 'NONCE_SALT',       '7eKB%{SBW$GWE(|{7$j}oC~H|#1QZes{q)!pzRL_d1KcgNs6LR{w_)Pg>9alxa@+' );

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
