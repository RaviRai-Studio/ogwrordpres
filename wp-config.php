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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ']AGSkfxGerFnF)^kR!Zg>|3FxhoDTloO<HvZ0U5b:@UCKK|<H,+o$%MX|k P=}-u' );
define( 'SECURE_AUTH_KEY',   'GIzPo24Nvg_kj<9X]#x0H4}>PaY$%3xYI_+d*HGXWBTyCWm{` -W(Qw6rF2T2C.l' );
define( 'LOGGED_IN_KEY',     'WARMX~*:wqm*a955NNgM?o3mlZAT_Nq~R2*RJhfEu.!eT4eJL vP%0KvfNKd6wYJ' );
define( 'NONCE_KEY',         'LX9!P-dNSQ!A:UEPx7VFZOkf3tr^iV*T{i0S/}n0(h_38;gz3-YY(;rr:e-J(o%D' );
define( 'AUTH_SALT',         '_cMqK#QXt|1sijMlWuGO=>]QjsM+N@trZ>zz:]mML>M7=yaZ|{nqU@476LJK?-77' );
define( 'SECURE_AUTH_SALT',  'D{|(/tPk%tg6(|ctAadVub0YZMAW[{}Q4A@$[pvT`[@,v<U!#X` XU0?ZE1x0v$*' );
define( 'LOGGED_IN_SALT',    '$NTWsM*z.!GXtKpEe&F0Z7W@?DsRo-&I$Q<7OT!R6,-vD*S`Eg+3$j6f>FB0QyY0' );
define( 'NONCE_SALT',        '`S,V6A3:ohtT,OXPRp0QA`5/2B2[[y{y%s$CDZw3Y)IiiD9ftb&<yRXT68`LHFZ.' );
define( 'WP_CACHE_KEY_SALT', 'm,3E5C{)jS{qQi+NH_ ).uGGUB/E<U`QT/9kL[GiP8-z8$ss:BD:TH^|Yw^w$ A5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://ravirai.me' );
define( 'WP_SITEURL', 'https://ravirai.me' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
