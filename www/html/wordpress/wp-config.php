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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'r5j@Af3pKA8R7wh' );

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
define('AUTH_KEY',         '>Hr,}@|9,k;+}i|KU:Vgt#5[.H6Kl{6[/MKJ(7`!2c]+(d~~g)~dzz?v+0@G<ktY');
define('SECURE_AUTH_KEY',  'w]6!.3gdyEB<OEpJg^K_ 376)uA|jxSZ?uBEQ:m6;)d+I/+>*;qU.A,H(taEHb;e');
define('LOGGED_IN_KEY',    'QY:%v*[d:d+d}]F4Ez@o`e/eeRl9xY%?qNg UzSy<&pRK1wxr;-,.0M42-cgG0Kg');
define('NONCE_KEY',        '45h{{RP@sT!+iR9hruzKf.sX5pk3iS@gTzNGvl`|x+pdzSD97tYT@q:u,E8i 4.6');
define('AUTH_SALT',        'rf/||f-gE1jx#g[`WVw&GUu T_C@%a}BlhtNU^OSVZ39o!n|,bE6qXIX)$o.4wwV');
define('SECURE_AUTH_SALT', '0*<+D8XSSQ08R4>fgv*nRpnYDF+pAv^xK7ktUB)yg+?4p}V(WeV@>RHli.uA6<$5');
define('LOGGED_IN_SALT',   'n4rvl.Suo-KuD`0Tr(-l]v-R+5xsk94Sre6s!7vNv{R@Hq9D]|Kkan`r,{0Ijo D');
define('NONCE_SALT',       'yeXCW(N~XFP]}<Glz[A8a|#Nf{pG=#3.|5JMbpCfYdZ+XnKt]f @7)t]]kY=`o4*');
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
