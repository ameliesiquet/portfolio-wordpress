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
define( 'DB_NAME', 'portfolio_wordpress' );

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
define( 'AUTH_KEY',         'm!`~q/z#X.imf$lH&G9@WUxx&x(H}azq]8(@,P)vQr9V;x7(V5PX4awtR.k-?_1l' );
define( 'SECURE_AUTH_KEY',  'B@vpZl~RQ |1p{)majP(9V04<K>|V!g_RWu<9jtY/T83@^ZamlP5Y1/Cycuve0MH' );
define( 'LOGGED_IN_KEY',    '=!}I<? ?@Z){HF;m&[dr5-jOO9mG3u9y,[O[H+p_y/q$A|pjsC@!uvf&R.[GgUn:' );
define( 'NONCE_KEY',        '<*h*3~91sY=IX^aj[Vb6WsL&:[4GOBM*3pZtg,^.HyE#HnX^}$0juO!FuK~&CGu~' );
define( 'AUTH_SALT',        '(uq4y [9LcE49g<:8:(6w;=een)snEQvLw*_fsDQJ9^2(c4_gc3fHUnafZl2SSW_' );
define( 'SECURE_AUTH_SALT', '2qq*+96PobAS>E=tk^~mE {QXqzS3([zcKyugP}[9#%pHSU,YhEy803jDo?0+n C' );
define( 'LOGGED_IN_SALT',   '3SKRRPX1R-gDf=pt(ookCHVpC<UdRlkYnc2R&]W?Sr+gS!cqNni;2+HQ(?4ji:J]' );
define( 'NONCE_SALT',       'EvKPi:+;vNx .y1k/>-E_Umf{goP*c_SGmma~R0M}*qg9g+z.O~%qpSO(p*RQ.LH' );

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
