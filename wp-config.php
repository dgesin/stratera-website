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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stratera-website' );

/** MySQL database username */
define( 'DB_USER', 'dgesin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MOjito428!!' );

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
define( 'AUTH_KEY',         'Y4N8Ou${$nk-44uj-dM2$1P2-KbP[_MKDItQ>^HkdQYRKY`JR>~8=Hq<DqR6[5q;' );
define( 'SECURE_AUTH_KEY',  '>@y<4F_UHH2zPS7f`:e$C(se=s8(U:H~$)SY(&{~JO7};6EI Jl@v>#DUZN8._Gl' );
define( 'LOGGED_IN_KEY',    'eBG4>WQY/;:~nD0>rEO9GG-]oL}N@n>7k~^f_2dFmv,cNS$vU()eF}m1_*a-i]tZ' );
define( 'NONCE_KEY',        '$rcT#?hJ>6^0/b3A &.Pp;zkEyt0*#r %yDU6pcW>h<jG7*Sw$4bY-+zj$M++SJ6' );
define( 'AUTH_SALT',        '6R}BaIE4c4L[>) F7hc$@zFvHIa9WMK(CCq9R32Swz>17RG>T6KASPbLU54@s2xd' );
define( 'SECURE_AUTH_SALT', 'lrae,pzc#~h5#J!ERHk^,AUs0 EPznk]-^xVk~|:ws-oWI4@].,KM(4Kz216TH?U' );
define( 'LOGGED_IN_SALT',   'JBOSV7~U%yt4J j$C4#lM{/vC#)+}p=U*oA(Sb^4?&Id%K9PX=/yHcLUF0VTdO+_' );
define( 'NONCE_SALT',       'w]|>Hk?XK=X5C>DB;,dM]#S,Z<:{~&_-,nE~I||wH U?l=)^h0|$89YjTB^2Vvo3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
