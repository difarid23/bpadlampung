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
define('DB_NAME', 'bpad');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'darling15');

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
define('AUTH_KEY',         'C,wOCG8B&a>x`DJ:cy]^>$#jOMm]A?-[1OiREFzXK:E9KzqzJ^;5udTl%ovJK.Kj');
define('SECURE_AUTH_KEY',  '!zvJtU[3[b.7%Y+&8P[}c twZk8/oJZP*QvPRdj3y[fi^aQAL|r2^WS;Kfk[9MNu');
define('LOGGED_IN_KEY',    '/AJKQe5nuLZ87C:2FyvX;L 2[SX)FJ>Qg4<BO&:z5<f- };?z]QP7F:o<[qkX3$M');
define('NONCE_KEY',        ' &TY]/it>2O{@IAN3dgYqX K.p_Njs*W8]Q O:+!lqo R;ajt_jdr+@Nb^z*q(PL');
define('AUTH_SALT',        'u}!FL7opZ[9/=u$^AfG_R>;m,epJfPbYV<,}2l/7{7p1*~|U.Q|c[NPrp8_fX19J');
define('SECURE_AUTH_SALT', 'ey<<cbg19NS(i_I*_?QSApm3:,),_U4<;|E2Ezz|o>Le`b&A,|;`EqAth>EyX&=B');
define('LOGGED_IN_SALT',   'K&68c^:L{`m>gz(X<%<myjvU}~Jm.3vIWj[>7EiIIO#e3KldSxkz98T|k1GcRS@+');
define('NONCE_SALT',       'v.RAj[rE#y;+Sw&=Z;+{7&Ulo-,N1$[4Vraj3KPt%t1;L#$I1r2!/bZ9u0guV/kM');

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
