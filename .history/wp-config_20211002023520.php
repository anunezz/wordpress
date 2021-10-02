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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ';,l68J`,{S j)qkzpQq_]/uRKY(?.:S@o1WWMZijC)AKK.r&-wy@[]gsYfB]|c##' );
define( 'SECURE_AUTH_KEY',  ',@H3*Z.]+@AM}{RFa7c~1F~[B|f!HAR^Af(H(5X).b)l+_o1qGr$A`?::UmnePa_' );
define( 'LOGGED_IN_KEY',    '9<WEDH:cD9fCRs=ch`X}i(U`q[Foc^f&iX`SY:japHME~))_|C976I_OJ7}EZ!t8' );
define( 'NONCE_KEY',        '``_B+=Q=7+dsEDtsr_}R`hi.4pE;hZ4q->Oc^)haaJ75Y;BJuQ_$O@~VBH:P O@[' );
define( 'AUTH_SALT',        '-Y1a,s>GwVb+@k%#`*09o~[yDfFpRr<acLo 3ml_IF5zLs>5#2}}{Wo%nGo@^^vl' );
define( 'SECURE_AUTH_SALT', 'HrWxZfm&{r5:3QV~8qJosj6Ir!UwsEg/baU$w.w9;?I2,X@$w<t/jZ)8,#b`arYX' );
define( 'LOGGED_IN_SALT',   'VK#]{m<IC1D@d1fk(tq__r-t]zbbCPT,*/(;1SqGq>M$d^+W%D7c<pcQv 1.}ZDT' );
define( 'NONCE_SALT',       'D0kDpY1mC^K9Jll]Wg4+9QM|XB-];?Zm|G`UzUU,$cr}~y2(+|9tqF?@O>20n$+7' );

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
