<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rhysmovi_wp625');

/** MySQL database username */
define('DB_USER', 'rhysmovi_wp625');

/** MySQL database password */
define('DB_PASSWORD', '!PeB185S[4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qr4xmvdq8xhkycpelhi2tgew6mtl6s54qnkqpm9xcv4m6k7v9pfub5seoldkguvc');
define('SECURE_AUTH_KEY',  'p1s6w76ptkbj7w6ymlygdsagx2facpvore7jll47r24di0hfq1xi7zivmohmoga2');
define('LOGGED_IN_KEY',    'schdg9tgcefb0hyh8xuxxabxrytmtv5uziftf6gefvq9ylvx9unvwcejejwvaxjv');
define('NONCE_KEY',        'ocsmxizn02olsgoen2gdfuwma0rf8dljvqn2dn81f9vag6q3yvhmglo3eyxz2nse');
define('AUTH_SALT',        'mvhiq8tej1zxgt5i71sgqune1pfwdqx19qitzkk0ekjpgqr1u9vorfra17vdjfwm');
define('SECURE_AUTH_SALT', 'ymsuhqhmv3ah0wa83vt3lwetxild31shvh3b3okrlcvazuitnxypwjfrqinxcwjo');
define('LOGGED_IN_SALT',   'pvhpaa8wtutspmfmktclmpbgpt6ckk7dstccuor0ontceqmvpmbfktsfudzvutwn');
define('NONCE_SALT',       'slxc369bwbybcjbbc2xrcu9srwwhhetgulwkzaermufx1huftqb1xk51aqgi40wb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tth_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
