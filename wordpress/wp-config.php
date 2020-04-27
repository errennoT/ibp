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
define( 'DB_NAME', 'ibp_projet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fP6zBs!.54ghvp^tkci9-zI~bfI&:DDuH[UbT8Tqhj]v]L~xk=:8x>9;;o`R R|F' );
define( 'SECURE_AUTH_KEY',  '6*s+`25$-P|WS*ND*r>6Ss{cfk#{_mw:SBMF8@x j_c+@1&?w8qI&`T*;j5rB6,<' );
define( 'LOGGED_IN_KEY',    '1rh|wU>CzN*GbA/o]GpHOV&~!nTjodg)?#1t}{`f<Bp=OO]f1gLuS8xC_:bC!A@ ' );
define( 'NONCE_KEY',        '^mVvzIgFVVx=0g6P$R>XBr7$&&eP%hk7&CoXHEY0F?qJTL-_!q1(}:nR/h SV]Lh' );
define( 'AUTH_SALT',        '17WX?@GKN:lKg;&~/BggMry`imS08sSJgyG__%Ip);9Uxw)zhdMW1mjj!xy@){-O' );
define( 'SECURE_AUTH_SALT', 'irk4l{#JDyVqbt=t:QG2a32}ytq#%_ihwcD$e(}i,q=2(7Bd<A5Gz^_bo?,IHhX<' );
define( 'LOGGED_IN_SALT',   'AO.S*D,b`[fQkt4Xg?44n+^!(]&CPY2+9@cXTC9f*VsMu+CD2er@5_$?a8c3_RIq' );
define( 'NONCE_SALT',       'Nu_%lqs]&y!y77- t6SL92dOO^Vx4Z|rl<e+m#e9z+8DWQ.0+8_eg;~{ym5I`  )' );

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

