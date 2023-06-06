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
define( 'AUTH_KEY',         '^+n4a^No@}Y{J58Ud[Q<Vf_nphtwP_@1J)_Z]Vc9KKQi(c21o^T.&xhptofT?CR3' );
define( 'SECURE_AUTH_KEY',  'wm}Tt=lP((dU8{F 5`jFgclR[aw[ShpTW8]](/DbDK_Ieb>-#ODA@&)nq%C@SbR7' );
define( 'LOGGED_IN_KEY',    'yTvD4p=xJ% 0cGiQ7CnLt@~6$>/v-]g$[E6DJ}?/Y5VP|HF3Yb{rnlKDL8 <X_ Q' );
define( 'NONCE_KEY',        'LyN!n^#=9$Vqa71U~MiR/CCjg0r!Y>kIT2Y*N@;-D@.x?f#Ov,,q1;B0ap=BBJ3]' );
define( 'AUTH_SALT',        'Tc]tHK$`[vjW1be`nR+-kyG/__HPX34Z$>CQ7;WgUP`gz_J#pS_9HAM?>3!yaz?{' );
define( 'SECURE_AUTH_SALT', '~wmdSTf7>@*XfO[^YPk}/%pZ9dp~~BBPS+Y.@*uoEfWbJhU<l,aXz1j#ML4L9(<E' );
define( 'LOGGED_IN_SALT',   'Nm2,4@MvJ{=v)rf n|E{ocd!WgeZ).Bp&d sa6=0-n+g QoR5N/VN6fzSB~mqq}D' );
define( 'NONCE_SALT',       'ca;Scr+IeOh)Jp87:Z=:mu]Om|nuj+o>UjN}` $g*1mgetX:A]d*.,gD/UPAQz*]' );

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
