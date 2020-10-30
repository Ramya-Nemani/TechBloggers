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
define( 'DB_NAME', 'techclub' );

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
define( 'AUTH_KEY',         'H~$Z%4f5#Q]84~nt#q6%0`nXNa%|3s(+`0:3g%TihZqd%|O>mz~;8;*S01}h^e_D' );
define( 'SECURE_AUTH_KEY',  'mq9:i[@^!=[VdPZ5jlyN>Lq?JNGpu!BleZwDhkm6IyBf,@gf{]s6hm7h`msF3<]H' );
define( 'LOGGED_IN_KEY',    'h#D7?sYx||^.rSmx[?R?hG;gkfrWw6;o0y8Nz/j6ba;[}DE,}BEF_bK=)o:!Wq~T' );
define( 'NONCE_KEY',        'h`.(JsmhqMX7/.24+G[M@#T=AyHWvs!x%lSHUj4?TG0*)6t9U@JGy?SH&S+usi!v' );
define( 'AUTH_SALT',        '=n.{_[1lF!#R:0Gzvjxe&2K@GR_aN<k[]&kFXbLTi5*g>-}hQo+uwy`VKw]&)+$g' );
define( 'SECURE_AUTH_SALT', 'CC?4IW>oyK9[c)|K0O2+QRNVJ75pBdQ!H5%xT}:Xp %<(w@)E-kyDN>;wAcl4r>k' );
define( 'LOGGED_IN_SALT',   '0ywbeni33g[n2c1IhO{=gGpnC4.DZ9A:!_Yq$c kU+P^C8%-p&d4]jIahgtc@P7+' );
define( 'NONCE_SALT',       'K!Qm=n[epv:GdLR_SFf`:yz<WPexKn~x6P-Hyr:w9Nu!E6ERzGTl,TvJ[{RwGP1Y' );

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
