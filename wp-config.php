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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'suru_studio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R%fNdV1g]`Y$_x%n+0|9:asU]2H9S4?y.Ea.,M/^[R2xB|vYqI~Elz.Z6MiS:f4~');
define('SECURE_AUTH_KEY',  'T`d(Y41[k-k]Cd#tcP_Ph)P1&lL2{wO.^{y4BOKl%Q~HKS#N-5;?*<dqNwjsEPe&');
define('LOGGED_IN_KEY',    'x^]04)kr<Yf7>On.)K}d_tVvuG%0({X3v/J7#?=>9^]]c]e1#[Kd7[H[!9WFt~|U');
define('NONCE_KEY',        'u[6#@Aki[3B5hk?67H}>YU:>7 )+cfs$NlmYztU-q4Qh*9_W-(PO31$tTi`&6#u!');
define('AUTH_SALT',        'y4n14TZ;$^u/pvGOGpVX%TxXB.8ebNRISd7qaxk0:}8/h&=iC36|v^uL}irTZ(zI');
define('SECURE_AUTH_SALT', '#5/uY!fk~>,J~-t7!pp>Nw<yuR3C;g-mCkJHEo1_i$zlI.om,>]5t)U1hr9NI*cZ');
define('LOGGED_IN_SALT',   'a;c}PmrU0XkgMo:G){X/dV*z(2MNM-p;]C>}z[b_MG:G1biex6V2x@oaSk% 71ix');
define('NONCE_SALT',       'op/J!cXJ+@xgYcGKr5V022vGYQFVuJ?Y#t0AT5V,w6V4%H+0{iHG5q](6zU)rFv2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
