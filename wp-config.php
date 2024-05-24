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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'poC/<z:8fcqI_:k9n{JSgRrv8XcT^ws+S(kBS})~<0JDO#ox>*7cGM<9:Xm^L@~[' );
define( 'SECURE_AUTH_KEY',  '*3pf/b:vpK6D2/Z0cT7{?q9e!Je~u)=/CF}ki-Ai@,^4tx~)^WtG(9a2mx@=aP->' );
define( 'LOGGED_IN_KEY',    'tFUM0]bvFq{VWrKx(Q]/6yy!%&W0K8*owZjX<9nXqQx?*V{PreZ=JhN)mL&*L0.}' );
define( 'NONCE_KEY',        ',/1xlGU/^&+IY`Qc]}Q7Y4kJ^kWTODe>-]/si_Ul/*;)LpO%9o9(9TT]mjYYpkKn' );
define( 'AUTH_SALT',        'ph&1ar20+G5HL>4B*~F6fJBw/@)*BA(LS<a0D[sImY3pSRc~M&X+>}{aT/)^6PBV' );
define( 'SECURE_AUTH_SALT', 'H?pd2pJHCe<9CuAu9!U<Vs=]gz>0q<s#,t`[iKYiEUXfPO:I4LPc @0</[mvJ>|(' );
define( 'LOGGED_IN_SALT',   'Une]kY;/4_@Dv_miJ,sMlr_+<_jmG}4[6$s]EUa$K><|dMkM{!)G>0=.b,W=F@JZ' );
define( 'NONCE_SALT',       'etjCBBqd?78;-&>(8B`LWNnH}aVfADGHOy|&i&pEZ-pA0syx}0z9Zyscqk1wr0Q3' );

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
