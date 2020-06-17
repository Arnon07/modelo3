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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'zdyt;KWzDTHm4[tjvz-x6hDm_L%NH]a..s}pShF66CL0P84=gOf`Bn`zY7EyFz-K' );
define( 'SECURE_AUTH_KEY',  '?BWe_kWcpp$O<K9-~-&fLELShHu+Uf`G5uzdWIB^]W<X)CqJDp&n@3|^FC,o x/~' );
define( 'LOGGED_IN_KEY',    'zXg9OAF[YS)#x&GF+i4|<1V]`[lp}Ags<)xaQQ~?3*]Al}7aXF90,D#(OH]7nW2a' );
define( 'NONCE_KEY',        'zyh*c1kcwMK|* i~`Dz>Zxb ya=kE 6@72;l wW74#21%dYJv d!5>,V;yLUe/LG' );
define( 'AUTH_SALT',        'h$[nb_k?8 a]E|3xcLbK5:t.Yghtq_0+i~T^!dCzW~,;ZR40qvs!V!ra9e0$!o}u' );
define( 'SECURE_AUTH_SALT', 'aP(nD) jQ6MyU5v:,e=/A09Q^ak%{iA$wWgWx6%},_[1hb$G00h-dac?uEwh|(~d' );
define( 'LOGGED_IN_SALT',   'oM,(Ws}V;ZAW4s~R4!fFJ7Y)EuaxO!<@5TSwLz[^_I@EPB!rr[>B56NwS H}B<NM' );
define( 'NONCE_SALT',       '~QxHTAsN}G233LfK]L[9W/+L1;^-$F^Dca6CUs%0?^GHK%(sPhAL}*{PW^86Kx%G' );

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
