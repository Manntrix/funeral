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
define( 'DB_NAME', 'funeral' );

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
define( 'AUTH_KEY',         'rlg1<?o&a@?O&W:QI|y`i$+W,@QHU@liv$-5l{uQR3TDM%LPOPs%I/z&Z/!v;dyL' );
define( 'SECURE_AUTH_KEY',  '/+)VQzvHPm0scyRB}-aUuMJL)Ka$Fiei.kQ[HsF6&OG6y-S->0<+0)>EY7K_$d5Y' );
define( 'LOGGED_IN_KEY',    '1-BD .s.q_:PqvBYC<HWcHI>9#EYoq(ib9adkj+z$e`av$P6z`0&;+UEu^r#+ ..' );
define( 'NONCE_KEY',        'yZ_;?b[kd]i123$ E9LDZ`0%o8go._Qd&uG6a^u`4OKlp/VQZ~[=fbo[W{&L8;fN' );
define( 'AUTH_SALT',        'vEC{xDJf?F3m@0?XA,ZkL*T7MP}3[eiH}6JO7RvKjw,{GU;=-90w)vRK%*>EAI+2' );
define( 'SECURE_AUTH_SALT', '&.)p6p5gZ=D]ATHC!Z^u{RP)W%vIy9oU]RqL9Bc&VO&{^KB@.)]$ii>;H)3b!z,)' );
define( 'LOGGED_IN_SALT',   '~:(bYm^dAVOZy`V9D|=7#QJp][?)tb3Gu5L3H5lI0qO#9-7a;oBcm#3O+AhRVt@7' );
define( 'NONCE_SALT',       'G$@ad%*xrlMfd0Ak|oK,/)-ci^b-xwat7oyzhZqN!)M!S[7yZgrX;$}^[R UZY5}' );

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
