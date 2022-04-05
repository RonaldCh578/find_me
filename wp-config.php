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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'find-me' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'b#o%,)nZ I&{N!m*aCkM;J_4*Fq{)7Zx.Cd$$U8cN7P`P67LFf3F|JTQ.;>raJqx' );
define( 'SECURE_AUTH_KEY',  '5v!<czHgpfUXB5QH8;N=Kk$?)CKrsHR&zNi$#D$x2+w_b>rjgAvF__9w<BFTWC.~' );
define( 'LOGGED_IN_KEY',    'NMMjrZW|^mT;saXz{/H1N-DVTaKSVQJ~XvO?HwFQ-t9:y#4++$Tqz++>*1|,TC31' );
define( 'NONCE_KEY',        '_@v@EYLTzfHa!3O,*J,j<Zi5WPr`SBU4Sr5+1W9t r<IfC,)LH(R}4SZOV:6Sy&l' );
define( 'AUTH_SALT',        'B@Y{XBTtLp8b:;67DO%qE:c}6:&oGxND,~l=V>-Nj0B K1=.=9-iB<{DtD9RjM_(' );
define( 'SECURE_AUTH_SALT', '[A+cN&NO+&+Ys`q#L~B6`*5#j*vzn=ht{9GWb0sI quNaBzE[;X@!wCXU5%IJ-AQ' );
define( 'LOGGED_IN_SALT',   'iY/oyZeVI~(Z*ls[%.L>Ngc>&2-2,z<<(E+<5M$q_7`!Vx#ek-;ROTIDiGA[b6~6' );
define( 'NONCE_SALT',       'vm#<2$w2Oy%OP04OCX7j[Jv4#{,|*awOX[2~3ouR1tsY(zor)B=zP}ph4=vGO;3N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fnd_';

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
