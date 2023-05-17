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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'SNh8jF)~E5!wD]c9FhnL-A6%%^#W9AVhSJD&D%1$Hap OsczH%Xoe5r>ksvr(k$q' );
define( 'SECURE_AUTH_KEY',  'Gw.Tha*K`6kpK~[5yHW}V~<`B]WEN+pc?U$P<37N6shsH.U$qq^-AfWqe65Wy3wn' );
define( 'LOGGED_IN_KEY',    'n,m:}yMnkfa c2=<eZnKZwr($,1Pj blKAu0XSTB~SIQc/rnG0j~W##5sNBD5^LZ' );
define( 'NONCE_KEY',        'ryjw!A!5 Hesu_M7S8/V^uAa@Is}]v^)E<tnmt1s@!mJ&Fz-=@p%z6CE~Im[~t@O' );
define( 'AUTH_SALT',        'X,ei3RSKP@?$+b.H?@NSAlzXw`zF9znR y;,m^7<HWG:w<L|Per$@z9o376B.CT<' );
define( 'SECURE_AUTH_SALT', 'w0H/)66Mc/gC^]<VAuM xj7V8~l%ZlnzVNw2XP)n8q0{XyU}(rgg7QP:lU]2uF=w' );
define( 'LOGGED_IN_SALT',   'M_@R|2r!~R8d.b^6 Cok_`+gsMjs{.Jdn:`T4`W<T}6jYE-<=&d[LT_gdy|d53 d' );
define( 'NONCE_SALT',       '26(6Vm/*PhbWaAg%$Yn}s/_/31AeF*S#uU^dfc%mzYT)l^m0AIEjMx{m]H&]xq_M' );

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
