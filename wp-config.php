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
define( 'AUTH_KEY',         'ce_{o~qcSHV3)IkI([{R^(#BqG~>)&GV<O~C35oK};0zt=j+H!{8F=!l|LxzSjjx' );
define( 'SECURE_AUTH_KEY',  '@^EG|L}:4zy>mS#~X,jDFH~U&|4zwpDh*YG4JMki/tsTuX ;1 q~mARv?jGLZ|3T' );
define( 'LOGGED_IN_KEY',    '?GjUDtI@@xYhJ&)*=9S&K^J?I`s)L6m1M33VFSHLB)7sg8lyLKR:;1wpV2%#t.8n' );
define( 'NONCE_KEY',        'JfxW,BWM+ i-Es;?uLJX(.diM&mAmT(?x4{2-Ff:GWPgEiWx>5m,$ga-`DJA3=1!' );
define( 'AUTH_SALT',        'G{se[jzL1:i,bxMoS48&@8m[E)<*G:{oLIyrp`=HkhdCI-vDQWVmNQes9g(TZ<p^' );
define( 'SECURE_AUTH_SALT', '<50[#%U4?lUAgkx2w/sPa{>NNhI4w)0?#;,T{oi`QUw1_/9OoSUv@U}n9D#6Vaam' );
define( 'LOGGED_IN_SALT',   'g6(rf-=F#wMz]oC`w[&(oS%|kO_.E;{=sFy@cB#gsUWRm$,yyM)JjrTc|N[dq/f;' );
define( 'NONCE_SALT',       'D;:7~@uy0)N(ic#j ROiSI{Z/%ZG(Q3+wTEbD?M/O}xe1oAHCCNhpgELOIuo>yl8' );

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
