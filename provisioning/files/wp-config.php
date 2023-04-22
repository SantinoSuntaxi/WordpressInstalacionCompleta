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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'wppassword' );

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
define( 'AUTH_KEY',         'U:7>0(&@AldLTvUp2(/eu)`/MIen^B.Sdz-+!IErbyrs$M-S-RGU^^nD5#p8s-oK' );
define( 'SECURE_AUTH_KEY',  'v<+g;+6Ia)a;[aT!IKI7,BVkWc)6`-v,3T6&(Q&.~ a?Yzqs+l~X#$ eyLKCQf7u' );
define( 'LOGGED_IN_KEY',    '<V}%jH.rDdSO>qKXf5c^Snw :)mLKtAbkCX%{V2j@$jTdE7CS8fr<;s<J9LoaB@p' );
define( 'NONCE_KEY',        'Y%j.SWB9&:3 Ix72 kAjvEGasnlZL[IMY=Rv>G^r/n:f;RV&Ge7 Z6KOS8lF,SF1' );
define( 'AUTH_SALT',        '0| ^2aD{G+rZ{xq7BQ,4_*>3#&Z:q3@v~2{BQq<m9E2~.sXt$T3zBE3eoSLmL-1l' );
define( 'SECURE_AUTH_SALT', '22lu+,tjJlh158{K[^%EM$=hM#X.e~yl6K(/8E3f]/N:kOiR35eZ(aB%z$~&P>$i' );
define( 'LOGGED_IN_SALT',   'pHicWDGPZWo_2`.)e~4kRW&%!HA-e/7/j3E)yPV)#0344{kh?=*Vij~%/Rt;m|Qx' );
define( 'NONCE_SALT',       'lu9ydiYO*$_wvBSqr??F_WkmoB9q<GmRIJ=J SihVM$#KE(`wydhrIae)+LF2t>D' );

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
