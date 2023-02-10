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
define( 'DB_NAME', 'bandec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'fKIEJ5flSKpAtaTlchK4GZdBHdz8XdATglbwPUGyWVvcC1pwssqybJg4wlD1kaZU' );
define( 'SECURE_AUTH_KEY',  '1d1gYAt4MRZNoe5rVL7dyMrpfimFrMNctM2v0ZxfDCPAToRX4rn6yUnUZYttQSNc' );
define( 'LOGGED_IN_KEY',    'k6vUD4TOWN5GweXNkyIcnlrftte8AvFnUq1gVUGfhjRYj54IwxeYbZRN2zESKscG' );
define( 'NONCE_KEY',        'FMlCHa0Nanyapr6McKSylM2WRNS9bqcgLycx7M3mVlpVaw8AVtJlIr24jzr5lLYO' );
define( 'AUTH_SALT',        'drfKa0u3HUodVYCvLom8cs9LfVdDuzJv6BBUFhxdBx6jvyqbXw9yI5kq4bX14p6H' );
define( 'SECURE_AUTH_SALT', '4pyABCenLZ0d0HutQ6oovS9aiqlUkKWZxv3qaaXghiYo2ewYm42wPkvlg8FQCh4S' );
define( 'LOGGED_IN_SALT',   '7mVQrY4Z02hNZJLbCeJSHxFGmKaFU9aQtjI43Hy3ZcYV3vRupFNlpLPoWE6pjukP' );
define( 'NONCE_SALT',       'vgnW46Z8bV8x5oPnOgHOEFgtqHmnUXonmXPSFvshJofi4XIrGulRWxpGzmXtfnfj' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
