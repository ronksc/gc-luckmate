<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
switch ($_SERVER['SERVER_NAME']) {

  case "local.gcluckmate.com":
    define( 'DB_NAME',     'gc-luckmate' );
    define( 'WP_SITEURL',  'http://local.gcluckmate.com' );
    define( 'WP_HOME', 'http://local.gcluckmate.com' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST',     'localhost' );

  case "gc.catus.tech":
    define( 'DB_NAME',     'gc-luckmate' );
    define( 'WP_SITEURL',  'http://gc.catus.tech' );
    define( 'WP_HOME', 'http://gc.catus.tech' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'catus' );
    define( 'DB_HOST',     'localhost' );

  case "www.gcluckmate.com":
    define( 'DB_NAME',     'gcluckmate_com' );
    define( 'WP_SITEURL',  'http://www.gcluckmate.com' );
    define( 'WP_HOME', 'http://www.gcluckmate.com' );
    define( 'DB_USER',     'gcluckmate__adm' );
    define( 'DB_PASSWORD', '@x4(x8FF' );
    define( 'DB_HOST',     'mysql6.virtualhosting.hk' ); 

  case "gcluckmatecom.youdomain.hk":
    define( 'DB_NAME',     'gcluckmate_com' );
    define( 'WP_SITEURL',  'http://gcluckmatecom.youdomain.hk' );
    define( 'WP_HOME', 'http://gcluckmatecom.youdomain.hk' );
    define( 'DB_USER',     'gcluckmate__adm' );
    define( 'DB_PASSWORD', '@x4(x8FF' );
    define( 'DB_HOST',     'mysql6.virtualhosting.hk' ); 
}

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
define('AUTH_KEY',         '2tI?2/L-l+pg`$}tKqE]y<vx4OtAuP0=*J:p-:)->oIRRu4_*J5#o?/KPe3-RDuD');
define('SECURE_AUTH_KEY',  'P526Qf19^br!RazU#-x#<U$X%izdVVV44m2OHzrV?1nCeDZtUyDm]`SH iC,C-W+');
define('LOGGED_IN_KEY',    ']ivx=dE5qz<foGe:=~f/&<8M[5w;h1XmC|z54<:Hn;cP>>/O!j+:aU,AL2XsfBTJ');
define('NONCE_KEY',        '7V+adf8W|K;j/F+sd1=ANPsn)2/20K(RYr/_6T|FYJbF&cSzY&ZtY<ghV4^ClVw|');
define('AUTH_SALT',        'K*X$N(G}@relD%e7tCOXX:Q~{Cf0V`Sg?Y+p&fQlU/}xDPOn,98f 8-kG#+LDuJx');
define('SECURE_AUTH_SALT', 'Q>dp);qXUCo1Yz/ -Y??g2AHa]UeZ:s7kb H`rh{wJF>;EX_{7 AEkAW174:8R(A');
define('LOGGED_IN_SALT',   'Mu&AGp&?;A|Kp[$.*dNufiab5^@ zRe[*2k+fhpJt+E2_W;3-mXPQ|hP205EIovt');
define('NONCE_SALT',       ')-iyy}[7JF0k-Q+i4mGJ%u8!;iu7_H,|>w<G1cK;0Mza5x Z|{zU,iX)U#*-HAKs');

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
//define('WP_DEBUG', true);
//define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_AUTO_UPDATE_CORE', false );

define('WP_ENV', 'development');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
