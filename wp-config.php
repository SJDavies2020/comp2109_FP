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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bonnied029$' );

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
define( 'AUTH_KEY',         'Nfp}- ^[G0t{JS%A$5mU/l6k}!G7FAbjY4@U2 Qynbk%=-rd~1U#,0qe3x}d&]Ss' );
define( 'SECURE_AUTH_KEY',  'UK}hRw{zjd8kXxF]fl=?ENHr29|KTwh@qO$M[z}qnKkSC9F1v,?}Een_*1s7CrN$' );
define( 'LOGGED_IN_KEY',    'Hn-<!3AeDJurNuy1O`&:FeYazDE8oR]IIl_yF0*Dn3VEP[;xU2,W?V tPGu=w3UQ' );
define( 'NONCE_KEY',        'zHSIGh.ZGoL@H64j7T&|..S5YTFsi]i]J` VT&Ak[y1rl@7OD+ cEx-Mb8X^Lh~;' );
define( 'AUTH_SALT',        'Rt,{h&KaH^k;6s(z]>(Y|htgZ^[mPGwg^IIgRxY_mVk.k,L9D*~sWB(Z3lVgR%Qw' );
define( 'SECURE_AUTH_SALT', 'mq,9n#1@5#I}?3sAYPASY2l9?jYbInRW>mh|,|~zp.CN%lxFbY6|FL/VeKsT)2f&' );
define( 'LOGGED_IN_SALT',   '^`c*gdd}|ZVvjbZA,mGw:MPb6QAXt;o}+mvouT=K2sMv!?LOWG<HCsn;nVZe^n3O' );
define( 'NONCE_SALT',       'c:^=@&bJqPIb!NGe_Cv-OJf~Pkf[/[6FRgUI#[*QRKmYF})rl6o?.La#6=Eu35jz' );

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
