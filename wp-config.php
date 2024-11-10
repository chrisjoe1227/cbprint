<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'X%F|?^Im_.phw3*nUOadML(97iUDSGiwP8)Dguh*m!Q~9g0?+$u63j&7Hp3ubs97' );
define( 'SECURE_AUTH_KEY',  'EquJ,^#5|i<yDGo^dlI9%}+QmfrVqa.A4yu5UGUp)},5Z75@uXf.1BLV{iy|Snkv' );
define( 'LOGGED_IN_KEY',    'bvekEjO~l)C0L`X+?@S^`Uqpxy=I6fVz>*.jP_sz@]N!0Y.aDeptN!rwgT%w&>y}' );
define( 'NONCE_KEY',        'YpdO5r(#Ll)s< qWK&]V)FX~2@b=D]]E{iJN7Uf`}Ef~PJ(7;/M]m@q;4WK#djCf' );
define( 'AUTH_SALT',        '8C@VhYy<G WNnf!w=O?96/!_(hf}v3j?;`[d&wsB Ib} HfAx.ryQo; jaHk-~GW' );
define( 'SECURE_AUTH_SALT', '}7=5<tdgt$#F: B<GNLytOiZ>0mi`VUrC{(#;%<7R`_8v<o}6|L}C]@`6Ji^yq:c' );
define( 'LOGGED_IN_SALT',   'svH)c)|a(t^7O6^C$k~]YdMP!Lzc#A{^/6rz^@7J}HFbZbjM(Kmyxji**)#1pxIg' );
define( 'NONCE_SALT',       '}Jeo0s2b`CR/%8w@ VL}%j`,N~/[7:Hb3$-4WB|{>&~6/(4Y;smgo~l$EAoKt}<|' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
