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
define( 'DB_NAME', 'malware' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f^*#jd.0RbraYP3b&o{g&H&Lj`7)ucb20FZc^eNH;?8AGPOB-P=,`zsu{XO4q:x(' );
define( 'SECURE_AUTH_KEY',  '/H%w2]k$=bfu#hDIH>T7WYOKF?1)e^VSdMMFC;7fU=]R}?JSbyk4~:68_3qBf _>' );
define( 'LOGGED_IN_KEY',    '[Isa`>>YoQ2xDBX rm4~4r:g4^Or5p*,{nraG}O5x$GH`:XR`$k]n)H&.927T6$q' );
define( 'NONCE_KEY',        'K$mQl@Hdb=uiWv,;8UU8SBx<q:2JoUgpta{lV*X;;uPguVk&U:*c*w+Q6dL/UpS5' );
define( 'AUTH_SALT',        '6`g{%7([g|R)Kn7f=CWtZ,IMT0=7-l5!yHGocW!iO9t(=={r!k68|!Ziv-wQ8SY]' );
define( 'SECURE_AUTH_SALT', 'Pi%h[/tv,SVd f9Upy^7[8CcB4-={rz1pU!uTTS|SA_4~D:5MDQZS$(XYQ|7NPl#' );
define( 'LOGGED_IN_SALT',   'QFDOCr~2Q|PC4RzEJwd)i+O57d4>Tl~Wb<$r]dG,CePBQmv=1kN^V%w-A#Y6oH{?' );
define( 'NONCE_SALT',       '])$HLv<A 8)f(Xa!a/L!5l^gK ffzXh5G0{I(b%+AO48JWl**^v}g]C1hY@0{h]S' );

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
