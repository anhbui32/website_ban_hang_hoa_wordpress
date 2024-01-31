<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuana' );

/** Database username */
define( 'DB_USER', 'tuana' );

/** Database password */
define( 'DB_PASSWORD', '@3-pSL416l' );

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
define( 'AUTH_KEY',         'go0yd0knbewgv1peiflllxqf6tvyymt7wieswwkukuy31riw8pwccqcdth2p3odk' );
define( 'SECURE_AUTH_KEY',  'weqw02wkl39wpuo7zmykjfqmuawph9u2mwyoiqpgfv8qjygh8spuwbf7ltrlgf1k' );
define( 'LOGGED_IN_KEY',    'vdqepbdp3kfeeo3jw6ie1wfvzprg2qotfb0hhrtqv7pg6gllkbawe7xj9n2iymzb' );
define( 'NONCE_KEY',        'ics6mbakbe9nblhwbstrimip9fnsobbia0s4babjyvebz9pf66dflzhn4u8deniw' );
define( 'AUTH_SALT',        'z1iqzftqwphfjkbkbksjkbz5f4nqlykq21fpqpxymei6lmjd8cvfqhvaiyq9iyxq' );
define( 'SECURE_AUTH_SALT', 'snoyrqxrb6dflopcs43tebywovuzz8nugl23urdl4fhtdae39erzfr2uah9tkd8u' );
define( 'LOGGED_IN_SALT',   'wwun5txtncyzvwnh3vqpj2yotzgvmbqlte9d2rgk2rbjma4ojryfkhb5yfv3fiew' );
define( 'NONCE_SALT',       'qfbrffvftrzmonmbrovvkg8znwbigwpx4olnbowurh6imle4wupvpj5fi92lnf3y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprb_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
