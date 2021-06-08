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
define( 'DB_NAME', 'word1' );

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
define( 'AUTH_KEY',         'eN;jqTY0=AW#=?[,uhZTQ0EPp8+;si]w@0n#+R9LdkxIHBMs->3pqEF/fulBW7d&' );
define( 'SECURE_AUTH_KEY',  '5GOlRpLk1Nvm{)wTHIg.^aij*[1c1BXWZQn?D(3+KtbzJGk~ZL7E|r2-b$}XVD~x' );
define( 'LOGGED_IN_KEY',    '^da-Et+g>$4Tc;%F$)5*L1hL+W|goM< >8=I~9cN!;6%z84V_SPhP{:e>*C V75*' );
define( 'NONCE_KEY',        'ajKVb6@Y?a&ySB?jP_H=?9pOaU>#,N&bS@5k2S;h^IrsK*3Z]XMGtGj@JD9X(b|!' );
define( 'AUTH_SALT',        'O4S=NY5K,khS;a+s.xo[x<O&U@W^;VQM%<Y(AT;U3EyOGBxf1o|SsW-o$&Z%G<dV' );
define( 'SECURE_AUTH_SALT', 'M=J6$3&]_b]I&q7Fl&G<.J1pS9J)4A^FZSN;8qt&m}4Hz:Apr~gWMqm0,88hA=k|' );
define( 'LOGGED_IN_SALT',   '(o[#9`!2Ju]?w8Ld8n}=de7A:5^#`.Vt~CeJ/*aYh_!o;w;x^]c|O`KFA!,7FR/2' );
define( 'NONCE_SALT',       'P(7Kq03`/KG!+R?cSW(N`kuij:pUr)r;)ZA6M&|V-;#cX}wK,_[A`N^$p%xGJx;q' );

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
