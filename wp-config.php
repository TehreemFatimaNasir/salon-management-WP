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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'salon' );

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
define( 'AUTH_KEY',         '0`{T6&`u~Rb>;(DIaweB%nG9OU^,q|oRtW0lA|_YL=#.mkM%:aNfK`K0uGm8uQzM' );
define( 'SECURE_AUTH_KEY',  'T&4hH@$sQQ+K]XdT}~ue(Zn7S^l[)rDJ2l2lE$?-H?Rk3y?tr1hb>Cfcj)IJD(:/' );
define( 'LOGGED_IN_KEY',    'tiG2G^Iw>BRm{+.i4X]gbBE&Z0UPD5KZf6c&{obPBMfkh $uemh^}$_}ic;VIwrb' );
define( 'NONCE_KEY',        '$nhU5JoB,4*)_Y/xxbyK|m #f]-t!&x*HM^s@/%s#3,vVJg!E}wTmW/[t}~3m4sg' );
define( 'AUTH_SALT',        '/}-Y?U:(OY?Po!kV.Ei0eS;~PzaDE4FRf9MesRTXe6(:!-6TwDHa]Gee77N( ^=*' );
define( 'SECURE_AUTH_SALT', '`k~=t/Dvy_a:Jn6r_of:@6YWZZ,)jRR.`c.1+kcP!$(n<8s^N+v03q`ZsGE<g Up' );
define( 'LOGGED_IN_SALT',   '(QeXj|t[ t*a^14G;Y$4Sg7oAT(_+LR~K?ai*x]#I<@s7-hXg#>oqg5v=sx 0-sB' );
define( 'NONCE_SALT',       'gOb^<SWFQO,23:bn6K9xC?G8d.B@fj}5t8QUOu6>vMV3pb,sO;k(F,p3*;L i/GA' );

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
