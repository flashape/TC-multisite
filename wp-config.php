<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tc_wp_multi');

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
define('AUTH_KEY',         ')I(~i/h~+~?9fn,e]_+CUwRo+;7@.++8W9<S=|Aj*L-@=:DuE|F1 !MbJVOB)o;#');
define('SECURE_AUTH_KEY',  '6UxL@[iE9]? f5IE|*dq[]Ao4_ttOWN<8wLSG{KI/bUog5Be_PnAT5z($zUS=P^:');
define('LOGGED_IN_KEY',    '`*-UHax;XD^%cGZ+S-IEs7kJo87;+,RHD-$^_U-:;CBt@|}E2I|vjTJT6J=pL,&-');
define('NONCE_KEY',        'x;9,cA9]^T8n5=1S)+$uWm0@S)n!,$H3G~aO7^2),gVuuSz4dW/srz@)k77]V!+2');
define('AUTH_SALT',        ';|h*H]U|[c03Dewc&j+aHPkht_|Bf<!.ei-6uVmM=VQ|T/^5$>p+;k{j|z<a@12N');
define('SECURE_AUTH_SALT', ',VkkC!TpYzC-M@In887mfWDNg]xm)ZU+fABDicmwJG|[l*Yetp>F}f]>x+4/cEzv');
define('LOGGED_IN_SALT',   '6}.y$!V=}:`7wu(]-fHIf,AO9F9`+C:^M.8?2prJ#K6N-lK;kY!]2<t:D#QjNvvD');
define('NONCE_SALT',       '{6>w (:Sa$ZA7|js%qN3KY<!K |BT0X-$!`#*+4. op%>FOpo!&tt[I*[8J<z!se');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tc_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
ini_set('display_errors',0);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false); // Turn forced display OFF

define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'tastyclouds.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('AUTOSAVE_INTERVAL', 300 ); // seconds

define('WP_POST_REVISIONS', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
