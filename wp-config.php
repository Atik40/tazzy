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
define( 'AUTH_KEY',          'u)iX2c IAyCabK>S6f4XS7^tkA6t*_+|AMkm:ieT>l_zYY{N>{VgVvK4/P-@}f2N' );
define( 'SECURE_AUTH_KEY',   'R50P+du]o|(*9LIMU}L/f`-^vJc+9w2E7sFvyDg[si<InvP8m:-K=aP!^Q?U+l#?' );
define( 'LOGGED_IN_KEY',     'J!0~=T<:,FOc!XH;IZ s(P8Rd6e0u`&x37>RJ&]olV|1mfAYC3|PO%-<zyCHnT]V' );
define( 'NONCE_KEY',         'P,FaVYFgf tiMr*9n+-?(&n!60Z[:fF&mRh>KqN)n`qBX1}4E+61f /L9`Az<beW' );
define( 'AUTH_SALT',         '@zzxMgJLta=/Ay=J}2px@5]?pq]^/4!pNdp72l8lC[RG]?tJ{<<[U|.yS5twCIN;' );
define( 'SECURE_AUTH_SALT',  'j6&/7XMljC0+0Ntr/{Zp[zta*cf,DTwQ[c3BFAj3w2A0jZ&QZzyl[8}<g@pb6qOn' );
define( 'LOGGED_IN_SALT',    'A]y:awdThV3sYkBU?JLO6ZL[T0bMPS;.!j7ph*3y@X*lb$#Z)tJ`M6O7tL:Os/= ' );
define( 'NONCE_SALT',        'O_XxA&nq~-UMqBbk &xojc#}VY71>u2PANC5Nrlt,fJ;phh;>P,AP|Q~$ggaL5c`' );
define( 'WP_CACHE_KEY_SALT', '&fB)m8|i4,>F,S`*f-4D7as}1zuF44R]?SW*F)8pJetQh*]>yH%|nUBwr>-0 hBJ' );


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
