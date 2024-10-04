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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'd_0kgC&6C]Zb,qk.< w14%==IWrnSBiW5%N:HTkR`X0 -B{f0{$|.e!-(,ktLx$o' );
define( 'SECURE_AUTH_KEY',  'Y$Q,Y`pa oQ0hN<eD)4ijo@i2C~ J?kQh|yFOB#crQ1NaR3b?DaTZfo6AP5s;ifn' );
define( 'LOGGED_IN_KEY',    'ATg>b~34lVkGZ}/?1{c:qnxKn??W3YAwdw)%i&^)Pz.waJ_i}z2v2uR^XBS19V6i' );
define( 'NONCE_KEY',        '!W72X@T$b9#kF>6~F.db(&tFpCm F^,ei]{9Z0du<IE|*a-vWcnrWaoOI{Z<Ptt(' );
define( 'AUTH_SALT',        '$Gge~iRppC_`c=F^jJ;rW[a3[vsX|u|kn|n4-wtoF FT.#|s;-hqF??Q!qVY15[1' );
define( 'SECURE_AUTH_SALT', '<fh5>j$0Du5kkJP($7s054TM+wzbN(!GZ;`[UTEG#kO_S={0wm;$Qhs>B@XdZTTO' );
define( 'LOGGED_IN_SALT',   'ph+oPEiU^7UhAH8EYJ$t[dVo5Vau~jpBrQ|Wqs1d~Qnb xz+bZZ:ZH|=5bA^J8AM' );
define( 'NONCE_SALT',       'Ofh)@hw}hWk%TOOn!bx8k`V8b#]Xabb$@QOd#(!BcLDn><Ii7*?qQ4EX/esVKD#2' );

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
