<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'ddfdfebb_wp669' );

/** MySQL database username */
define( 'DB_USER', 'ddfdfebb_wp669' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ne2pS2q-@5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ezzo0yjfxehbjeltlcuoftcy0nwlsqtpc7u6dvq7wqdzyahwwlgxyjibxec7a06t' );
define( 'SECURE_AUTH_KEY',  'pactqabiiilwhgfthxxctfvi2iqra4ycwjip2eknapwnbubkzucbb3dtis274uuw' );
define( 'LOGGED_IN_KEY',    'wof64crnhibefkuyjs22ntnssirbqzitqtjagjtet9dxixaaptlbh6rpid23kegg' );
define( 'NONCE_KEY',        'i2az50fzcjpvgsfup5oo5ypckfnbq3oplec0xvyrfra1mvupximwuvnfqbu9etfq' );
define( 'AUTH_SALT',        '9wdohitjy1inb2cr9fkqpt3bgtmlgl3jzlvec8zqrxw7pt6lozfoymrj12ltvvp7' );
define( 'SECURE_AUTH_SALT', 'ayvlpjmivvpuwbtkjiucdxf6gylgugq45ydpzitp8utiikm8pewoxdnoe7rofmlk' );
define( 'LOGGED_IN_SALT',   'wgnxos7dwetjlxmiqwhhjbbzb7bxihrqjw1c7frsn8d5yenkgo93gejvucdg962u' );
define( 'NONCE_SALT',       'fzsgbubm4sjulgknwr6cufycn9khlhjve0rsglbrptcccxjq8kcpzcjktbqqpczs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpry_';

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
