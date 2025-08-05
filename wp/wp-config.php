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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAA1649353-mfqrrk' );

/** Database username */
define( 'DB_USER', 'LAA1649353' );

/** Database password */
define( 'DB_PASSWORD', 'tIqw2cclOe2q5Qsn' );

/** Database hostname */
define( 'DB_HOST', 'mysql324.phy.lolipop.lan' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{>7|Eyd r981 .~Pxe?NhEv]Yx>X2hla@OWz{UjOWr}|}DsCNZ.AL#NIuAmp^@!N' );
define( 'SECURE_AUTH_KEY',   'DJ;]i+Jz#?RbvHWtz+h7O//i7pK^)qTyF]hcHK$*;8gl2*OdY.<hcEO<K.]4N,Wu' );
define( 'LOGGED_IN_KEY',     'W;JE?N(y2ofB0M^|OJ&3tP7YI(_+kZDcm?H93YYYi`urV9Se`=pQ:*pdcI*nvcNX' );
define( 'NONCE_KEY',         '8}}oEiwv#(`> }4]L:f|J|v+|24] 4}L2I@MJ(JJNK[fiaR&BQ0(jG0. k %fm^H' );
define( 'AUTH_SALT',         'm-^ ?[gzE5DEYmd/`rbl$0.v{qLO@j2tdk20}*;=_bk&&xc[g4dV 8Lmf8;5_qq,' );
define( 'SECURE_AUTH_SALT',  '|Bl~)uD~=BK`dV+a,uu +=_DEtr%X%zB(m%^)s<bQLIG6z& pFZepB>xUC/Dkivc' );
define( 'LOGGED_IN_SALT',    'm^p&~a{=?*5?;d(.2H}8dJBdhMvv|-C$6hLoLqX1%JaBbaN+g=3d5(X,z/7n<|nK' );
define( 'NONCE_SALT',        '5S(Y6?X.+(H[qt[[r_U;ZD mu7TkP%T+tKB?z!$WzVeZL8EI~g=?f9{DENw3NY6 ' );
define( 'WP_CACHE_KEY_SALT', '1]$`k Y)Y!jrJ6;SG8TjDO>|#e2.EKFeA=]twT-<l!@.FDWT5pr(a&.g5b?%8RhP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20250805180649_';

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
