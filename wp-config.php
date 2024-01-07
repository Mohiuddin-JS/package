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
define( 'DB_NAME', 'package' );

/** Database username */
define( 'DB_USER', 'package' );

/** Database password */
define( 'DB_PASSWORD', 'package' );

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
define( 'AUTH_KEY',         'eaT=u?R3.K3^UNK{jRLMzI]7Gt+Lp 2H~_otgYJ;p]4U@~c!y:~B0?_{# 0ObmB=' );
define( 'SECURE_AUTH_KEY',  ';m^9!N%Mh8S5[F{ec^&wH|-PAn*k` 9uVbIb!zZcNtF:lghe iQ0t`e%hdDLY%Uq' );
define( 'LOGGED_IN_KEY',    'tNAV55|Tm2-;@`z}.;v0g]uU1h[$_b#Yx%V>J.F*FLQgNTtPE<tuoY<^F<TLXUT>' );
define( 'NONCE_KEY',        '~_H!^vXt^mK4CO(kun4YzW{_YhH(@r{UsFySnUi->Q=_aHl> E/jC7n3C)q0zA[^' );
define( 'AUTH_SALT',        'uzI4gAd2.wqp2LmBmd*K^@jGy]mR/WVO0r=Zjp:l:0OcFv}[DXyVV9W~f7_2>I>J' );
define( 'SECURE_AUTH_SALT', 'r !daPl&iANu&K( B/dh<xH@z;K-`<;Bmv|jJN]43_CZ_=~c!yIAb<C#YFy|160<' );
define( 'LOGGED_IN_SALT',   '7BGyl}UC^Im. f^51Djc`L)|La=`!]8H!!3aT[]&c^{,B9wUi8zv`0b7+&ZYU>|V' );
define( 'NONCE_SALT',       '=P:/a$)8S3R2or:XF|&Hk;#Cq[yY5X-M>G5nZ&+|k:<ODQ L_$UI[Rh^.!mKO2A~' );

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
