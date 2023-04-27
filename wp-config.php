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
define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'y?k#[Xh]V.6tk#,$C%(R~b~U]#K{A_<V)~dL+9R%SDTwmxjy9*UL}^LZ(UqO]C-h' );
define( 'SECURE_AUTH_KEY',  'F=%2%O;R|wGwvy98iaVX_r`3JvF^{L%PTrFTaE aYkl+V`q-1Tw]V)zIRm.>nhXd' );
define( 'LOGGED_IN_KEY',    '3ENt+y/F_UXW#fAl9s$[$EEU*yO?VBXydn1<{6dfXu&M)tc)aY!!W5DK5iS[s!`%' );
define( 'NONCE_KEY',        ';a3elg/+B-FyCA=wIxe^%Xy_Z[ps-c?myIR9=frgnUp]ZDRb^Bh/^9(pgdV|/VjT' );
define( 'AUTH_SALT',        'WZlks[1]Elq|}Qsb|hx6|uZcT4D;)zzLvq7L&uFfz7C&l7+L6KTadfstuo!r+e=^' );
define( 'SECURE_AUTH_SALT', 'aj)2~Cec4_E7EZgz^<.*c*hrw7n4[UvuXrBjWLy:%HJ}(8#aFP`05x[3L8~gAY6c' );
define( 'LOGGED_IN_SALT',   'VJ>u.rpoL#}=0Yxv|DHQuA@meFsC[xW|*65!U:^ELA3vR7AJW<%ODtK:UPAcGG*x' );
define( 'NONCE_SALT',       'FXF)*Ts65_v%8zhMp&`r]trWW*iSqb})cPR,%vEhLMj]yz?7WYrSB$kTX.z XuHe' );

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
