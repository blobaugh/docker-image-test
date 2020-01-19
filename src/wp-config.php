<?php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'FS_METHOD', 'direct' );





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
define( 'DB_NAME', $_ENV['db_name']  );

/** MySQL database username */
define( 'DB_USER', $_ENV['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $_ENV['db_pass']  );

/** MySQL hostname */
define( 'DB_HOST', $_ENV['db_host'] );

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
define( 'AUTH_KEY',         '^$[PPU[9(4grDHL,kr}bN[g) CWl@=M[b_>,?K1YGffwABbBj5pU0JT^L84d-e0B' );
define( 'SECURE_AUTH_KEY',  'iC~`.x*wt|2a`6,!u`f[s%Rkj#J.w3Cy!U[0&8t,1*5e)zCFm<ZBK&5vH<8go:@V' );
define( 'LOGGED_IN_KEY',    'Fd;x50ywx`<M{D_D~GIrsFj7~s6zb+Gt& !K<:.]>:S)3R_p*eGY!6hI%l^ %wLu' );
define( 'NONCE_KEY',        '_6o[^6!&W2)5no_<U=M2 dYElOt:~OL.%lK%Q7?3,crzf43Y[4`W*x3`(F{9x~1x' );
define( 'AUTH_SALT',        'mpRMiM%|40CDcDfD=B=2Nlm|9>mHPE^<vX+#~cwy1 ZSxMv5j73]HND_u;7%L~8)' );
define( 'SECURE_AUTH_SALT', '&uLJIPW5P3g?OI4<UHMRGH1%kZzWY4Ig/>Kx~:?,Vy;QRwGHcrm@tyaX|#8cTuF@' );
define( 'LOGGED_IN_SALT',   '5t`f>/5vax{Nt1ltX-Yom2Y;%)oSZ Hg5YNXgFn-lU]?:o4[K2dxSogVH>D7b VP' );
define( 'NONCE_SALT',       'o!GXbWCxdGs/|XI^M&>RljLzy-[`eY;Lx<d62P:c!uhlphgK.JC<8}Dh>j)`F>;Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
