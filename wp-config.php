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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'ET)Afmt!K:I.O$N>@4rpOV?|F=<zgcuS/&U&h8l m>PB97%my12y;w?ZP%%t}@&H' );
define( 'SECURE_AUTH_KEY',  ';#x%4L;W}3>jdHQJkKqOn7eS?qH#_?728,e#Dl6$zzg=sJKH@q@3n*:!Gh:ZV0*E' );
define( 'LOGGED_IN_KEY',    'Vf+7 T*J;+-8K*Ew=mMCdL/^F*q_y(N`UsBRPW:!wrjt0x]3U/3f}LVGO3@pbu]g' );
define( 'NONCE_KEY',        'PyWiIxQlV|h)5wlTu2mm[>+)U>/2Y#aBvXp].gK3n.suD2`Ji%WJ)1ETI+H:?DRh' );
define( 'AUTH_SALT',        'zvQ; ilue;j.IE*1`eBgBU_qSDZkXB2QQi&4g$V26y`V#bV]&Qj#Nysfx5^BnJqA' );
define( 'SECURE_AUTH_SALT', ':Q5Jva/oID#!)JssT8Z(lLnbd9HM4qv&=6VFMJKCkD<z*+_;D4Lp&4Um?2O~16q2' );
define( 'LOGGED_IN_SALT',   '~FlDqg+I=TYNRi9~gnYJS]7<}(9+%DK,DSrKJ6?%Np27=riLb2@Gbwcbp9IU_C<m' );
define( 'NONCE_SALT',       'O2:,T5s$.*{YLUugkYrS[tl@+9d@ra?,yZZO:3;eEFhwFr>}O@9rF:uQ{C]J]Cx-' );

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
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
