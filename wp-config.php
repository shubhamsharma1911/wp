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
define( 'DB_NAME', 'vaish' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'F`~z{2NoYymt$/xyb#~Q{D8_bp9qSJ<iO6lB!kl(4-Y/5VVK*Pj2`G`Xn/P<{tAn' );
define( 'SECURE_AUTH_KEY',  'PZ5i]atUn4*:F}?*1P8Ch`Lvvc!gfyuM#bM]#>X4: %v[+2=YxGPX(/?]OckX0T`' );
define( 'LOGGED_IN_KEY',    '&O(I&>)~RLI$T6vWs]V-/f=Db<3hrHP(;~N 9[?J7QBlO>[MaLdz)ab$d$C?_y2j' );
define( 'NONCE_KEY',        'g,.5PM.xDyB,6s5N}Sml{0O#aX9#wgI 6n)>,aW#;xNK}MPJp[$H#kjiv&*CYAmv' );
define( 'AUTH_SALT',        '@}xcUOn KQaRc@9#<3Rt/esp%c5FerS8M(e=p_.N[%_E@bOVcC1R<x1(D:QV?5^y' );
define( 'SECURE_AUTH_SALT', 'I3Nh_&!AK>^Em[O{I~X?rc!_S/~0`*YmkIpr/GGSp$:-ot40B|XSWL{GLAkYRmMQ' );
define( 'LOGGED_IN_SALT',   '@XSURNk7N+aRaBj3!DvRpbK;fYT%AT ^qV}0 jbv4QSE?&Ff`xr1;pjDP[53;r(r' );
define( 'NONCE_SALT',       '~{S8g5h>;u-bd43O|s UogOg.[}<~}&0;{A~3LU@Cbp8nAra!K):_L1?D3%.L`m>' );

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
