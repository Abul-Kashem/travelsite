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
define( 'DB_NAME', 'dbTravel' );

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
define( 'AUTH_KEY',         'OhCUwD&X9z 8ZI9|&Nit~6eC*{D``Yu8IZXly9o_jo4Nf9.xW[x?MX$Pwq1C6>!g' );
define( 'SECURE_AUTH_KEY',  '<$:Y&%]mdUd}9}8z/osc)yhHV0cZz]HRRS7o_+WPf}{wx+o1oUP$1=<<E}ff4iJ?' );
define( 'LOGGED_IN_KEY',    '78Q,e|[bj~K>#$@<eh<.B`ZO&8dgOC]qlZ/z{?#MgjdXqUowaGf1b3PgI73(.amk' );
define( 'NONCE_KEY',        '=$[&UPn:(aB$9+x.;Z:$}0lw7enKJ_!{z1n :B%7;9:rml&H=sL-fbibrE~NY?6]' );
define( 'AUTH_SALT',        'ZRoEau Sxp0YYAx#u#0M`ky tN}ZoUH L0>~uSKCe8|q4`WJ*OAjZW`W0Dfcsf3r' );
define( 'SECURE_AUTH_SALT', '/h?Rf?7lio<!_gpTFgGFJ+Ce)7C#l!8=)KO&V{;v!cQ!Tj3HcOPJ;GHQva2[~S(G' );
define( 'LOGGED_IN_SALT',   '{W.jlin[;<_T1FUVJ^ .W43lFY[1a ~uw42<#g@x* 3(:o`W;}rrS4@chu^&Y]u+' );
define( 'NONCE_SALT',       'Q8.4{y~{(YF:kj}q5O)h$RdrB@0b%0EUWIr(8WV WyhP(QT$=vcLtM?.P,(j4*55' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'travel_';

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
