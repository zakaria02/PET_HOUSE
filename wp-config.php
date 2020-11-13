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
define( 'DB_NAME', 'animal_store' );

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
define( 'AUTH_KEY',         'E+defB2`ID~4<e:&V}O9~88 Bxo_O[o2iuhb,?u!|A36,+~]m9y}}mt@SpEtV>Y1' );
define( 'SECURE_AUTH_KEY',  '#M*zzFquk,J3$~YuWf]68#|4Ipb%gbe(w/2&9NR;V?$w*oVtj,(/7!fwzO/FOwqw' );
define( 'LOGGED_IN_KEY',    ')#)mG8-unH:a_*X_TLZ9^0bTxGT;tUY5G]InulstnO<F~l$Bx(NbC+P`YE]?HG-#' );
define( 'NONCE_KEY',        'nB#zT9~c7(fY~n`eAt&0&08P4&I=yP;]u}.-5}@6NweBEm9E8PE+*#OUyxG$nMgR' );
define( 'AUTH_SALT',        '5i(+-Pr]/:gmsmT?_@~# QMCXp@N[}V{@R~,&a/%A+7.!ZyWOh:/,p,cmJ)LMBti' );
define( 'SECURE_AUTH_SALT', '^%upR_=,2L<OE]HLE;^4EknGW4#P5is/xw(9Ik^%&C_[LJUyNlB{Gaa~ ^*]$cvf' );
define( 'LOGGED_IN_SALT',   'oSdAANu/mSDIy!cpl/{wmw%a0(+Tnv9c-5xpnz@ M{/SYsI^wx*yhx&8WOqC_u};' );
define( 'NONCE_SALT',       'nb~2w$#j{V64mnToWYR#6apy!Trn;~}%cFzqt=<?ZeJ=$1AN1_bf)=1FcD$%-N>5' );

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
