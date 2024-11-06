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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'SU8m0{kd[Xp^EQv2`{RE!o3dw0JPAXc%4iM&1:drnmVL5<gg^gdui&BD0R1[,_N6' );
define( 'SECURE_AUTH_KEY',   '>5qWIKJ5/m0Vj^~1*]bVhwSRISW OFQ>lR4 `G2yI`[w8?9h^A|atiMv!4*n8*C3' );
define( 'LOGGED_IN_KEY',     'sQ@DkqxvUJlHZgm~bDG0GE8G`3`(GUzSk5ih.[!/uDq@B8Z08, t<#o? VqOY=A0' );
define( 'NONCE_KEY',         '0~jGX`+?vaqNDJ%e/=YPM&z`[lRk86}nW-Hb>qbE0f]}tdy|GM,#wRHLa(![b7$z' );
define( 'AUTH_SALT',         '7i}Ewu42]P#O6%F#k/ #qH3W6j@HwbG6:4,i#^I?a5m)l++s!HFkChZ.rZl45GtZ' );
define( 'SECURE_AUTH_SALT',  'VUtP&kGdPqpKX+wK4{]qP-eCSb)KkOg%VRr]*ODReMT37/hEsy}8gL?-^BtYTw?q' );
define( 'LOGGED_IN_SALT',    '~v9?fIq@3AA(dabeT4OcqB8nchP$u)^^qArK=ah+Q70MGs@20bHTh_eLE&uosMY~' );
define( 'NONCE_SALT',        'B>}P~>t) I:`(gPD5fg`keR%t6@h|Cf>|0]m}:lmIYPA&>s8*Q<S%R`S^PXG`&/r' );
define( 'WP_CACHE_KEY_SALT', 'n#]yi[to+wo!:@K:<0J46XKZ{[1e@8NG$4?M)bNfEN34wm|>?_/vj43cw#mprb}|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
