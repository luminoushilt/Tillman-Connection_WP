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
define( 'DB_NAME', 'tillman_connection' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eJ?#j3n{f?</?pEgbJ(PXa_~<U@C(cJsLJ~%|?9%x_qDb{wnaNQV1`]nyI>Fp}_.' );
define( 'SECURE_AUTH_KEY',  'aVFSlp8d2lVx4`p,d`G?(Ljbyf}VzpM-^V.e4TT_tE0ASQq0Rq*-n!UYr$w]lmK.' );
define( 'LOGGED_IN_KEY',    'c$L<@Df=8uBWjx(V8.c[2]Z#HuN//J^FAY;TSsEaMU?-4|l Ar5LG?]3~,R/[.h>' );
define( 'NONCE_KEY',        'lGLRI<u10/,qm`!Q2;(n@R=BpbJUUX-z1B=d0@uY&m!(Wj79S1F3mQy;e-rjcIoB' );
define( 'AUTH_SALT',        'E25+m0mX;hJ,*=H8iWJ,sRG6P=^KJd>VgN:?QC dKVa^U0FWG%VWm]npzcm<si>;' );
define( 'SECURE_AUTH_SALT', 'bDJ#Jcq;N4Y2smp%}]i*?U87?1,AmPVjbTJUhqCk|Ao{W5JB]kH4:IZ~0y2{?>VQ' );
define( 'LOGGED_IN_SALT',   'Thm^@<wIy/{YjU1,hVQ&ZRZU|}#,Q}bOT?.eLG75_l||cp{vqzz]&J8A1i9Cj=bm' );
define( 'NONCE_SALT',       'q`)y74.m:#;K[%u|8U.^8lJCoS64ZQZ#4/(;18d]J]A gyNB{^9Lg)tpCUj+~v`e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
