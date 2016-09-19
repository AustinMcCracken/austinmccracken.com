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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-YyuX%YQtED9UGXs`Khz(mv:Jh`xxK6ynoo`D.,;So s&aS)8eIGejxi#OEv4%zU');
define('SECURE_AUTH_KEY',  '*P#>1_^cXUo q]<U@h~$`*#D@{z}S?fykD@_(UhcJ3aJjnjI6LbMAsbQ`{,L/`uI');
define('LOGGED_IN_KEY',    'rcc)>6^6}~|IjBnq9g<Mf@co:zsZlXi`>Phw6p*QydWBA=yz,:`6.^3i$tnFXa{A');
define('NONCE_KEY',        '2wbYcXD~Q42&}dX.%.D=@Z4T2],VCAQ0D$EVo#Fzn1C#]Z*CZMFgx)T,X2<&>ISC');
define('AUTH_SALT',        'R!gv3nhHLV8MtbCwElCdgqFlZtA)3k;W55$VF%AUvCLS 7EapWE5x]*<61*KE}y`');
define('SECURE_AUTH_SALT', 'Xe/9!oa<I?Kg9G7hE()]L~&ojMS,jetH1Tx+t`Cj(J-fY4bAoJwV)e}}s_bj!bv7');
define('LOGGED_IN_SALT',   'EwD%rb5Nuyp7X~QW94APsZP=<f-#%>F!qu9&[uQ:muShHI?>6G8U~#X]r&c{1s|#');
define('NONCE_SALT',       '=3-9n=p=A_3?&=$hW&m9)F}~hf(2+&L-?R,j$r/GDtX;:yNhg,,q?VhZlI;zw-6P');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
