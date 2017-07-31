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
define('DB_NAME', 'proseso_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'q-rn1!}G0M~eC3YT<QF!Y8!aq72|~dt8hPZ/|@HT y8R^Uv;5jm<q -A3PlZzuU8');
define('SECURE_AUTH_KEY',  '+0X_LMW_::<JtqE#-o:S2J7@zdZ6as{r~*8vif/Vsf`^mwgE]S{zrX.<VR4g9i8i');
define('LOGGED_IN_KEY',    '~&dkF?Jnw;zy;2L$D;v*ZPvsaBuiZ7dbD;9SB5T3MeryVus9&|ID.bY8HBkivkGZ');
define('NONCE_KEY',        'CfzxlqEG(JIFE,?s%lxzRJw+s)3:/4<(>_z9wUc|4%<%xEnV-Vw4z^7aT1)$tq=J');
define('AUTH_SALT',        'BLkRZkNQVI.xgq+LKuGG(W.^KtMKx#h` m*AEnyTB].D}-FG`z?^@_GR3SFJk,.~');
define('SECURE_AUTH_SALT', '!*#EHA)SV2q!MacFh2FfE|n=:Y})EEy:.{AB2P6s([WXl5,(wnE88ID%fUR$kQ~6');
define('LOGGED_IN_SALT',   ')bszPP|y.1@.zxvXdW-8%}+mVlgp;HE3O=6bgATsUmnwH8994Jqb{vGqf-LgP`/L');
define('NONCE_SALT',       'C^Sq7DOWnt(95ot!,kd@p~5Fz4(z={f 63;4uQ^,T0]#!4!|GIfDWHHsZ3Tw7V7i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
