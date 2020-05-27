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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'dbuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mastercard@123' );

/** MySQL hostname */
define( 'DB_HOST', '10.168.129.140' );

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
define( 'AUTH_KEY',         '3q}IIo1G!@*]T6=j<jju1R{l%Fb&z-|j*!u>h<hlcluo)Z%QaG`BU6.vGXMi2Vu/' );
define( 'SECURE_AUTH_KEY',  '$]Ia7w^n==._M8v f +sAsk}%D`!L:Ck/TuICW!X!Sohh^`WI_pwO<l#K~W#suGd' );
define( 'LOGGED_IN_KEY',    'uZ0pb_(3S[D-1_q$;w76EgIga,Fsah1ogMr$0(cD(<r<|^852?MM,jA3hiwUU:TY' );
define( 'NONCE_KEY',        '%}9JJwuDme;_jF!Iv2P,;;eTaK/4Ih12EpPR[k?i5,@p:=)vu*(;P(W8@hY15lcz' );
define( 'AUTH_SALT',        'bHA[$ z]5,%;F!,}=_chKBCfgmxh)9R4]`@oyk%?QuHkZwR)FO ]?ux4NAv*|U;2' );
define( 'SECURE_AUTH_SALT', '1>5DpmV~+wlZ ~7}*j`|XZ#{7OrRs1vqU A93&jU<r6/KX<Z`*FXFahNEdPypR,K' );
define( 'LOGGED_IN_SALT',   'N>RS4.@C8RR{3GZO~t)#?:|X4m[zW!$hIk{y`M%ob4fLHm;26*(:wuSdBHCHCl;X' );
define( 'NONCE_SALT',       'jQwUh[=!Zyyeps|4uFzxX4S z9CBqN3t|s:ml6tTm#7;effNgMS>khj$6jXCDon5' );

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

