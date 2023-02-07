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
define( 'DB_NAME', 'dpw2' );

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
define( 'AUTH_KEY',         't!RYNIDmdBeE?}|=ma2x9q8l3:R!G$`LN6Z~93xXUA[][r$y04H{6OVmHsZdpv,P' );
define( 'SECURE_AUTH_KEY',  'Vodjvgs5U%8#x6q:Gf{Rv[uM(z( Xol0d-iTLXxe!1.W3&]t~ycHN}!S7,AL4X0=' );
define( 'LOGGED_IN_KEY',    '6{ZrP4*fB:DKU-=#q#[}6]g}nSWu^pnu4YN}_4N-d(#D4<^d6U`d[RODjOh&N@Y+' );
define( 'NONCE_KEY',        '4<#_^sg,(;j/(YY]3+L..n&-[8ub3S?N{wwfg%X3)$v(Bz1uTpNUOn?R2yVn3NM?' );
define( 'AUTH_SALT',        '*tEjm>wUf[mL5+W}SlZ_Z=j|rCQ`0/Xz7:IL4&ua/am)uum {gsVtGw>Z[anNmz?' );
define( 'SECURE_AUTH_SALT', '*.+jh#cfvfc76Wt@gA(u8-}04vT8^3?dn[x#-0)V{Wl%&[EBCg $%dTmuu$28_[=' );
define( 'LOGGED_IN_SALT',   'uMOW;r*fGj[hIW+J?I<XW7D(%Tw,<uC:~v,1QWPh]Mrf)4cHy/]_WLIbPF%hLp~f' );
define( 'NONCE_SALT',       'SGD9mW%2gw7&j%Kp^T3AJ>gL=h:-<7t?-Vk$_)C)ti(!drh657 e7DS!&5HEJ=J-' );

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
