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
define( 'DB_NAME', 'marketpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1qPO44+g(hxb$wCQ@0vOTKYH2B@X+E4f:g{.S(k|57He$OMmX*}rE@&*]g3Z=%ml' );
define( 'SECURE_AUTH_KEY',  's&fQ:v(~xN6+Ww|$Ob%4SF[hfP/+<$9Z VW6ZyRwg|1tF+dAP16q_B&?G{HyxaS(' );
define( 'LOGGED_IN_KEY',    'uJq7OrNO=^R2]:<Of=E6e-F6eFuX@2rW-mahvmL(=N}*lykL+]D9B]&Q}(15>u2Q' );
define( 'NONCE_KEY',        'x6Mcd-NqydIT22o#nM>;-xi-MOY` ZDwTN>vs6g1dtll{G`{[.M={va!j~&$wZxG' );
define( 'AUTH_SALT',        'Al?>q}<yMWm5p8{1,Ot[`q<~(1dfl.i>XOJRIC:e8r tmeQ&jIj?A3g]AuP[K(!P' );
define( 'SECURE_AUTH_SALT', '+fvI]kmyp_wkB{d#E[ 9x?YB~Tc1U^LKJuxeRe[W^1Gy0RO>Y]l~syp4,s}u]fLv' );
define( 'LOGGED_IN_SALT',   'Uk&wG1[dN6+aB^B>{Cmb0)$WNXsDa&fQKmhBF-3f*{btE+,?JNc :0EJa#}Un)S^' );
define( 'NONCE_SALT',       'yhq;=wc~tA=ovJ=su_Bq=OwlxE -cm+HTof3J3)=1={6>3Ht/MlczCZ*&SRaX)Y*' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
