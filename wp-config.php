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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'i?%w4GRz8i*r#sj!HnGuDG)I:_u#*|n8;#`4Vr<#km[q[{*ExKfOfJ(ECL/}r>$T' );
define( 'SECURE_AUTH_KEY',  'mZC}^0V20u/(md@+= uYTn4s:LD,H*0rXE`Yo0}IP&p|fG]rR<)k74r-G8AyyA/W' );
define( 'LOGGED_IN_KEY',    '|86mE7;y,O?9bS.3Nce;ICTf|-{4f?n)z%TQC`Q>)_7#?jS@2?9cWBERH?p@m-vC' );
define( 'NONCE_KEY',        'KY!*A@Y3H2^JHE0Q;8,C;QkGeCXR[tiQL1U(i9]{z76TPCP0f}=/{OUg9eT `#x9' );
define( 'AUTH_SALT',        '0+Z!J1ja@~ncwT^ccuhz?7;49$=nmy{!o#Av)h{bI7rN,27g!@D})TM5$pz4$$aG' );
define( 'SECURE_AUTH_SALT', '&ZX0v j2y{n}*tE.Iz)T+mW*5!Vw(x<3#_u|BsHJ]_ClXzrd,tk+*z}[6r;FnE;e' );
define( 'LOGGED_IN_SALT',   'X/iA5{(b9~(I}]GD0n`p4gxF|Jq7@foaPaz@X,2Y|ppb~PY~a=*Q9K4RCW8lqWy1' );
define( 'NONCE_SALT',       'AXR2$?@`M3D4mu~vn:fwv:V[`KYOk1i8),bw,d+sTLqp4IrvG[%3/GZqyq<vMH`.' );

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
