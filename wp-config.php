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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dRXTj7Sjv/n2i7eSK7NN95FkBYtxQbBrFO8h0zL2WztHIKWuhMeSHhFw2IqTTbyjtJkqrZnJUCJDVHc6szCCfg==');
define('SECURE_AUTH_KEY',  'dcQd3FIgUkjJfIeA8Up8L/gdjQnz5dflRjHqU0JRmqRaaDYQKpySwmy9jDNLgQ0gDv86MVV/8S4aBn9xjRYsfQ==');
define('LOGGED_IN_KEY',    'IYJPO89FcQBZGKDHN7EEekzCLe4n1zj/fw++KGLfN3aXzL730qPwppLbC2teoPn6VQ8/R2WqL4u45uM74kEVoQ==');
define('NONCE_KEY',        'yMPJwRw1/5cKYgthQ1j/NL3w3Hgnyp3BwpSBQ6BMySApgjQ3y/skb14rlffRrhwaK7SsAePe+moddZigp8sRcQ==');
define('AUTH_SALT',        '5y8cn5TfieSpz13AcXEC73AX+KCdXgSmOyDkPQTcQKDQKrWJrx9fUNC5XijN1GHJQcm1OTiI40jp9iJrvyFvfw==');
define('SECURE_AUTH_SALT', '0V35UHdK/D6VOGMOUXHAUf/ei29SwB4677buN8TyLbjzzQFQCX8n4eTa9YidAzSdwrkCegafhAyUKLyTmf3QsA==');
define('LOGGED_IN_SALT',   'bz32cq5Ws8FyZpc6iN2XcUNpvkjg/lJmlf9PfBhZygZPojytqBgdtapIYZ7BYb2HDcaRitg9XszrpS756mmZ8w==');
define('NONCE_SALT',       'SUZIEUjHseh+X+GdJvyZBmjh2s3PW45wupsoG7HUJn1xTwB3S9c3WBJJHskMSRCkVZh1M+V/if8DNrWpje3epw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
