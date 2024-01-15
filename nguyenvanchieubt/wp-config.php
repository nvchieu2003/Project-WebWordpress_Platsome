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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'datanguyenvanchieubt' );

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
define( 'AUTH_KEY',         '6;RBdO3hP:wN;!%~o7`g9c@B<(#uPPk4yf#*QB0x6k:CwFJn4Om{-%PNUJ [B+z%' );
define( 'SECURE_AUTH_KEY',  'V99]wX1{)(t7um#_=Z:~FutdGq657!!4izYP&HA4)b+PI$X#9#Hc*+g4f<?a5i))' );
define( 'LOGGED_IN_KEY',    '`[uD3LN>cro)$9gt*Mn+&0]VCOfob;K3sqPT*%vozg5rgSuIYmBocr4 O/Qi@Tj4' );
define( 'NONCE_KEY',        ' 8$eh]5)s2n?[Q2/f9sa)UWOyob8Pli~~xB[d0J:W&i4J }r,>|CQO<`~.#r?#-*' );
define( 'AUTH_SALT',        '^_.v2y$4@UnrO,_st(2LBjEzS|n*0O)73{!V+IR@v-/ZcQ,1p1RqEVggw_[UHY/Q' );
define( 'SECURE_AUTH_SALT', 'pabxUfp8!F;Yrnk[-f[Q-YJ_i|&I-1Op0EzS= #~:S$cb|wy;[6S.zz7t5T9*m5F' );
define( 'LOGGED_IN_SALT',   ':PO_oS;:!5V?J1RHB|~8>ra-We/,[$yUG|e&(d& ID35]qC58twPne^QP%>ug!Ma' );
define( 'NONCE_SALT',       ',32n8mjEi@(yg-!B1zPg&S[O{18C7_KABn#lg5zX!D$.omJ-p@(nPbARoHJ>}Wf<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
