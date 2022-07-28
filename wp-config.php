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
define( 'DB_NAME', 'drop-shipping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'XkqM~ j?mf%J|{Op6ijTt]l)v@6J,ayn-;@g51>5fvu|go:4tP_uZK/dZOPOewyx' );
define( 'SECURE_AUTH_KEY',  '|Ew)j?[(-D7;GJ6nZcCWrc;:v;>Dm8cwmp8bOi.1_BdA/V .hxJ/=b20tEnSZX~^' );
define( 'LOGGED_IN_KEY',    'z7*9f6a(0w[(}:sl%vO@la;z}*6AoHV?j4A-*r|CN)K9mgfi!!:s8H7L2uysEr9?' );
define( 'NONCE_KEY',        'X1.C59p}RE-whw_DgUhQK v-@h?wezDr*NMU*O0)x2KGt,$q]N~QImkrkDB:M;iC' );
define( 'AUTH_SALT',        '%b}e,7 diT3_Rp|@y~nT?qf|VHP0_<.n@&TKVcd}wbmXSC]VyXc:KLEEH*9i{Ijh' );
define( 'SECURE_AUTH_SALT', 'PNGkIDlO?b6IQ0)[qsNYCn^mS}-[Ngk*@C+JqEFtGOXo YrF?|`q.n^5hllK$y|+' );
define( 'LOGGED_IN_SALT',   ';Sa{xv9DjcGw7&x]o=YE|A:Di=h>2$mNxhB0}!>)OhT8aYdr}NP 2j_OvnZ(8ob6' );
define( 'NONCE_SALT',       'p]SmTKWSH=^&0aXDGwQez(mbW2q(WNh_Px+$C0t1D8+3KcGg{AL|(tMui[*2Z=ri' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DS_';

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
