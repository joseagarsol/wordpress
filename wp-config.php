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
define( 'AUTH_KEY',         '![p`oE}yS$s 7PJUcos UL[fG}ig.o~bd$Q8ph F9T7J8z9I7$PqEYThj=4hG>=7' );
define( 'SECURE_AUTH_KEY',  'p~1U+O++G4h)Z~yCu^)=LP>WC6U|xKq;?a?Oq&,~P@r*aW^B%i3mSQ5kESz!McfB' );
define( 'LOGGED_IN_KEY',    'ILJ%71Mi0;40B46Y!c.)ftMn5{APyDOlnmtWLA:F,9-gNO5TrqaU.Cl(MY+J&.7;' );
define( 'NONCE_KEY',        '/.l5^rB@f8)9Q3Aay?Z<kzDl]:l-x&k;^SdY:UNW>X>o#8x0(U/KZ_VUz3Fxj55x' );
define( 'AUTH_SALT',        ' Y&B_,I^J2Ze(BLaXkz2<ulXfoN`uZ{ELg/==z9MBCe^&Y1$nBy1*<*0nu$QS.4m' );
define( 'SECURE_AUTH_SALT', 'a%Z~|CD6-OnXH[1Eb2ex;9Zk|-j)0ACXl[UA<yQ$pa7iPJBjz_#oor7rPAdlD+rp' );
define( 'LOGGED_IN_SALT',   '|zT`3tbNm~Xq1fyH409ljU9K+*#?Ge6 1ek%x,vWcH4AINuZ`<QizapH4b6j] :u' );
define( 'NONCE_SALT',       'dq,zAKP(46`Ly}wG^,EvRM>bByZ7qq^5^5/Go7(0U]I9wcY@re>}AxR3oqM+:5JR' );

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
