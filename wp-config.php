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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i8941585_wp1' );

/** Database username */
define( 'DB_USER', 'i8941585_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'K.QubUqm3UHTHJOyWQZ43' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'eYSqAooGRiRT05F9NH78ROFJ6HQ6ph1BEeMbQICDte7Oq7XHbGf0xmYieIVFn67E');
define('SECURE_AUTH_KEY',  'KyBMLfILVKg0dkmM3QwV9Nd1FR1Uj2rYxKVde4k8idTuHsiBofcRVTYoRhYZHQAq');
define('LOGGED_IN_KEY',    '3cDWCqf0tuAW3RihsRpqcYgAEgWHKxb9k51LVFKyw0x46x4tpFvdOZ4fjuEg9n6X');
define('NONCE_KEY',        'wz3HBLXXuJYOgo3BxtjZrwTTRcpmDRdQmvtezZMlQ3TnDsy7mcojM6abNlcRbh8S');
define('AUTH_SALT',        '4effXzhR3x78Jhi1ySvzaPa5AZGxAXEcSzxTdT6VjSNCVdP3fUJmXyWJUMW0oMpR');
define('SECURE_AUTH_SALT', 'iwmwfyCK100A8qQEAuHup1CaSqPwztnAV1d5HxL8XVOqFfPmtX1sIrseynL6E3be');
define('LOGGED_IN_SALT',   's95fbwTTYXNmcnzYUbPNR1mrdz9WhEo9NWFIaaVcVI8M9SRRnSc9bhT5IdCniJa3');
define('NONCE_SALT',       '07zpDC1TthNMx62PacpUSKWdxsoWALhsreMVY8KybaWtDFwn2ytkOmz1i3GDkRLh');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
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
define('ALLOW_UNFILTERED_UPLOADS', true);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
