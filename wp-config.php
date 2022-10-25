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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp-user' );

/** Database password */
define( 'DB_PASSWORD', '5@8HuT5g36!isBpWd2lx' );

/** Database hostname */
define( 'DB_HOST', 'db-dan' );

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
define( 'AUTH_KEY',         '`.G{4ji4v1<dT*n;b(E=>y=9WKeY@yLa20wNiTr4Kod46&,C7JPDMc.?nd5$N)kn' );
    define( 'SECURE_AUTH_KEY',  ':)9md<h?<M7fp-Xw3a5b#m% &ncgt3`YP`1ils=Wfy&!gmFHv.SpKMu.RBS$^M[N' );
    define( 'LOGGED_IN_KEY',    'bMzTM/-^n:DQY).^9yJ{mg{{=|.23 ^zNrM3e/!VV$#_-l;p?03*lPlgDk<BtE9D' );
    define( 'NONCE_KEY',        '=W|hjAnwIPe-[2WD&uY,Wj2Em[oGb8`+PjHM*[YuiWyLE(0vTi@>[&%y4!@moQ.$' );
    define( 'AUTH_SALT',        'Z~J:aCCd0[+/0i3W?Wf6$ICet9)p/6JTp7503jtaKWq;+wxLh+i:uKY1n*+Hi?~e' );
    define( 'SECURE_AUTH_SALT', 'Y:s~4Fk{,Tk&P[5z:[c7$]I<Ekm0Q5(D@L$KWLZDY;%d)&!aLnBE}nO9?[.jLhZU' );
    define( 'LOGGED_IN_SALT',   'LMifdMw$ec4}-058]2X^~-&De.9XA6zgAr]},F9n8UyfvSGcPM4R-rpZAx{T;Rdq' );
    define( 'NONCE_SALT',       'QPH@Q;;m,%8(>3>NH~/1+StwkGh<!D#29J#+THIS+BAo[<B`j[Jk$3t4|f~s/4mH' );
    
/**#@-*/

/**
 * WordPress database table prefix.
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
