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
define( 'DB_NAME', 'wp_site' );

/** Database username */
define( 'DB_USER', 'tafadzwa munyuki' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'FN`9<gGvp/G|/#jwSPN3_$2 U:e~ZKZ_)RX;q]}^ Oi/I$/!J2Q+EoY=a|(9No3G' );
define( 'SECURE_AUTH_KEY',  'J.Ls[)% InM _l4c$u2) >I-jrMj_iB^c .#0x3!^)Tp,^,?Dvnl]<e>OWR<*Cm?' );
define( 'LOGGED_IN_KEY',    'R3e]>5V3O FuGa*~zQD;hEo`{-AQKuKW193}67hH]&y7E=|ZrItx6>qd^syn<;Sp' );
define( 'NONCE_KEY',        'n!1M4?A}O0<c@vRHPixG-b7|)>NHvg 7deRi<@wP}Gs_)XMnR.U_NdW#4cr`3}`*' );
define( 'AUTH_SALT',        'DL|y3+jFm h44~,T)~H,iI:v,|</168~g13@PUVlZbXYkRy&97w-)tR^}SMVc|Ux' );
define( 'SECURE_AUTH_SALT', 'H0/g%Te0,/u?|VR!XP9Q/I}XV+C>~X4rWf^kQ`{&vvp8t:;i/:{ri~Hj[2!Letk#' );
define( 'LOGGED_IN_SALT',   'hI`]r[Lar: 0 =9+#g$*MVc|=cy:_*y?bX`g(&Dz?``kBO+CMGlN%m3Rt@[[;_Z`' );
define( 'NONCE_SALT',       'CL&GRy]xw^Naj`ryVmS%alg^O{vNZYq`^S SH|(v=Gk<,p;,<[}C:7VdTFk9.^7%' );

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
