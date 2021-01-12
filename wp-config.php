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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wbaether' );

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
define( 'AUTH_KEY',         'MXI$+t,A_l:+@ea8Dr* rU&|qj{;7T!/vaoX P(0/q)Defaz/R%qqefDTrKx <%n' );
define( 'SECURE_AUTH_KEY',  'ULaFz6/8vdPgrh2~v.##>VQlBZL@vby>sO]}bTal0!aiioMgaA8J^C!aQ]RXYOJm' );
define( 'LOGGED_IN_KEY',    'k/b9_7;B-{2AFp/QK#*=ivLD*`#cjfkWB9+<}FD3~Cgf#>$#]eETFBJjRxi!UrZF' );
define( 'NONCE_KEY',        'sNu`J$:Y4l|q[c{[UxIvLbx/pYFHeIeZn!tmhm<bH(CN:|^N/dQsmGyS>:U*d(w ' );
define( 'AUTH_SALT',        '=9s{.w}k{j?_>xC$@)jqtZx/fjcet%:<.!toV>b8B6o=CrcNYP0cfz,sspe47.Y5' );
define( 'SECURE_AUTH_SALT', '?#moC_0rcBq8jQX=Kx_wh}E4u3`!bzlysf^/&D_,OkIy2Xus!WEYn_Llu_va9f##' );
define( 'LOGGED_IN_SALT',   '=+_Rv JffV.L00x6m`x}2M^ Rk}UA=Ir2T8VCQZkHanKj,U~`L-j_TlO$4FX<O^y' );
define( 'NONCE_SALT',       '.b+NzH:!<lS<ft0p{zmBuM@jg`9_/j?Z/3q|bUr%Ve(HDp^K1*C$?3_%T{j}3QOm' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
