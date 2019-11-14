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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l!r!n(CYB;3)Vwkp]Pj+]N}Qy+k>8th>m+5V&[<xWt7#-4DY_A,eG#t=6K,i&jWN' );
define( 'SECURE_AUTH_KEY',  'u]XDqX^?76barzjdoZU/;g,kE5O6,HL3>HLtVqt.Q.9bAMNkiorWD7r2 pd E]n+' );
define( 'LOGGED_IN_KEY',    '}{.$i:;2`Z_9-6Ql3Sr;7`LHL>hFy&S|f gIcS-+p:s$qw(i+Jh>Y7{~;AxEN|jv' );
define( 'NONCE_KEY',        'ymYl&qRtOT|{[7tKrW#NBt=U?:9<SAumC,qGMadJE+J0w9Nn{?-Z^uocy&I.XklT' );
define( 'AUTH_SALT',        '4m[@vuzwh7/(S#li!1r.zNf:k3,PZGc4r@jMk=o_q+X_j4Bq&$*USqCuANfo)`PW' );
define( 'SECURE_AUTH_SALT', 'Nm)rlSU62JW!dawMDCzf_{`,&hs(OS.^(HTYFI@~>{}Y]cVV9GFF)NSC.m8E{&>V' );
define( 'LOGGED_IN_SALT',   'E_JBy1:u_hT7 8eae?qzixAN4L/pL$1bIjMGgJ(e6~0]y$T` ZXy> 7^|r;pbla@' );
define( 'NONCE_SALT',       'o:lxA$guHxtuIz0M{9H*(UG Fi%(wYX4^SUAXIW![DA~}w`XVzdtl#3pjlWl0^i.' );

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
