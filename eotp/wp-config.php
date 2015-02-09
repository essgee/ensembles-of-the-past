<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'eotp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|pl1=#$vMa!y)GW,?C5gTU!;oC QdZYW%O~rZv-ND~vSf82Yx+IajU%:nG,|?hs?');
define('SECURE_AUTH_KEY',  'XcblKCo4/?*[dpgfhIlW~)=+XFlW5v+hzdkaW;&WauMePfnT04kVi:-}R`0(DHhC');
define('LOGGED_IN_KEY',    ' rBF,Ypr>`TlsU+?<&K+]ENYP]tgb >3uP&+J3$grdrK&eKBHo_pe#|FYQb(#yL/');
define('NONCE_KEY',        's/P;_UEhFN@rjE[o}qk7^ 9(,$*kIo <pS{n.a}?`@(8My +c&&kqo>;Y+w|$Rz>');
define('AUTH_SALT',        'dINm.<K*CO#h3ijQtujVM;g)9U-7 K-B0E&JfA8mZm.2vkRW@:2|qK17SM0?`<Sp');
define('SECURE_AUTH_SALT', 'z|CkHz],+%,[Po Y9oNwflO%hAi8*>*~L0s4O]:+vGC3kC<n2<Y?K$ZApn!fA+Hv');
define('LOGGED_IN_SALT',   '8F7u+5r]K3r~EENqHlj+_v?G%d%TlV@K5=fsdq+L^-uW*xW|@eLa3=se5Q@*&AgI');
define('NONCE_SALT',       'O5K56PvXY!UMp3HGDm8`)r|&T%C-@3#cUJR)w1RPSI]P1 T+QVE=&WOq_cLXrw[o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eotp_';

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
