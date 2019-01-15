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
define('DB_NAME', 'Bioctor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*Ye!1/fPmcOCrkM(rFb#NbJN}.kku(;&BU/wREG)M<d`8:LT|0:G;H0ROmfBfX~#');
define('SECURE_AUTH_KEY',  'A)R-,+P`hZw9[;8EG<ngJ-84Bxmm%x~.>EPv@0x$wHe)BPhU]Fa)DuBP=!IQI,-m');
define('LOGGED_IN_KEY',    'Rae>GK-Ldy2~&sCNT9pu{UQZji%1M@yPaIv?*Agv!jeTnZ|+nKd@2mGq;SMRfZ{o');
define('NONCE_KEY',        '+HM9@QNcJ=F9:=Hzttpo- |hPz9Tn&@[#JQ8&FutJpogV+9Pp>C`s1)mEF*+fJRk');
define('AUTH_SALT',        ' /VX1O[u>tMLyPyfmOcYzp|T?9~6B6iV=fC<Qv(p>+s5@fRsWum`&du-(qea}3.^');
define('SECURE_AUTH_SALT', 'zb}K#mW|}?,SW|d:L;1itGU%g10.Nz(=|GAVFJ-x(U2hdXgMz%sg?3tw*LBhv@8>');
define('LOGGED_IN_SALT',   '+pwdJ`aZ`mX+xto|<-~ksi :?G_QAb*gf0c9+0,G7m?r-4#7m/-@lcgN`j!0PAq+');
define('NONCE_SALT',       'qC#p.Ck2dlp#xr^HvZzy%rX2zSQH[y/-nN>/@i*0Ii9pT;:iy $a_TcOW<)^?q> ');

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
