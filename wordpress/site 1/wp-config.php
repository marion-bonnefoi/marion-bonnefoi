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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'F$$e iY|~u!W:$WWCjX=WMbFq:v jq>m{8}IK,gxJV*: >:QFNkv{{C,c8 Bxtwl' );
define( 'SECURE_AUTH_KEY',  '1a*;y531MDIA}rJ3@?( Z6^iZOrSJ5;6MX[y1ju7Dx; y[+kLR|>HgkY6:&lnb_g' );
define( 'LOGGED_IN_KEY',    '!N5np:+8>bX>zXTPYx$sy2n4Odw7M_PHE!b*H= cvP6$D5MvqP:&.qT0=.1k2dRB' );
define( 'NONCE_KEY',        '4K-eqB1Ir$W3@2XnU4/pqsv8cW<-ky+[! nr5?~vf]__{[g?r3*Q!`vo jGUn/+5' );
define( 'AUTH_SALT',        'i+P8B0fG4(tWYn [?kz6)0$v*Y2v3=VND*RGA(jT$Y%R0h(?qwkICIL a&m&<G>_' );
define( 'SECURE_AUTH_SALT', 'n9eD,^iTN@G$yN<{bRpanu]0Z :~`_b!l68^~y-Gl~kn;9t{vScF6km_8`)9g-gn' );
define( 'LOGGED_IN_SALT',   'T+o>YVr;LT}@ZNW<&y1QO+J@fu^;.dT7ATIO_(yt>1_ P&(.$#kpVrC,CY]!9Xfh' );
define( 'NONCE_SALT',       'N*wOwa@B}B@?;%ls}825D/I}Tk{2%p8r;*/.EL5spha}eUsqq]3J/KUpY2<]ouV_' );

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
