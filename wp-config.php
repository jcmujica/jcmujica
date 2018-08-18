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
define('DB_NAME', 'jc_m');

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
define('AUTH_KEY',         'g$<Qf($3:0)xz!oYV.ApI6arGYX.onl+h1IGYX7^_ZT Fh1GShg(2k`ebUC-i&)>');
define('SECURE_AUTH_KEY',  'OUG&SCDH7RmmQQ9E~T0n1t bmV :JGDvf;jrE@]DgU)2CfpJely|zd;e2<Vr4;{>');
define('LOGGED_IN_KEY',    'CAM76I8+y;~6<0[]G1`VfN;R%S,SW](Q=w`!#6xy:D.VDtc?2!!AIw3?16^YYdgi');
define('NONCE_KEY',        'VON/!Oa]eU2+r<HS:bl2,o!`UCjmEG5V&#6ij8)-,RFt[>4M]}0Ch82L,rh/`=Ep');
define('AUTH_SALT',        '1(B,rZv`gA]aYCE(Y9|#dA6+-l92|AUn1SH+}%Z:xJP#)wW9VZ*fGmm{-?LL)@i(');
define('SECURE_AUTH_SALT', 'mq(0cDE_1)xpA?*;/~V9AN#~XvjabQwqB)fxE]W69,mQO[L7n`bis=Ux,NH$&Ib%');
define('LOGGED_IN_SALT',   'LCB~kNdDcg=P/aSUlN7P}J`PS![+0Ft4Fa*j}XF 0cwuI)~W|31NOOq9;5tX27)C');
define('NONCE_SALT',       'HK+Y|&9E5 )~rv!K:{LYU76~Y<B`,5x=HQ?O~A @n2/)_pCNqiR!J4q]otnGmRGE');

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
