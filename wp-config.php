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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '.0aR?QQ}eT$D3/uCXA)Oj/^[az M3S(@<qyyLEb<]u{s1!c`r*_5{?K@P{=$ffs8' );
define( 'SECURE_AUTH_KEY',  '(dpA%)kD]S~X8~Q|?W1qwX@vp5@Oq.PDEn^4] HRhzklc%)9/,nG<qgdO5]0Yigi' );
define( 'LOGGED_IN_KEY',    '-^rEC<>193/%lo3~a!7l?kDr@9Ov}zx(PAYFL|5Hx^Wl*-RzYLBPVu`w^CHB6^5#' );
define( 'NONCE_KEY',        '>Li[jKK]S$sQ,=0_3Qj3hntljZuS1mET=@eeM11$IE|HHd3>4n@X 6XM@/>LxkVq' );
define( 'AUTH_SALT',        'm_*I>naQdM:mmlprx*AD8&4sdpXt$=+ g+i*j6KsWAmTFg-jJ.U@o7hY0~#?Edg0' );
define( 'SECURE_AUTH_SALT', ';hS+GwegJ<o=g-/wNKD*RcwD?+)nSbj`x%,$sh8ha{-EA9[wk#H |n+LmG?GKtO5' );
define( 'LOGGED_IN_SALT',   'pO)LqzP6+oQ6Gdo25.fq)cElHtt)&$cv#WIw<,v&)G&9V !*47%tkHOo}IU]$C>U' );
define( 'NONCE_SALT',       'I-P8yEhV%xndD>>Oq|o#niFHu}=mKL.A}(xxt=d^ M=Ssf|Be2wO,RpUdQ8]8Hye' );

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
