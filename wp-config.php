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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'manuel');

/** MySQL database password */
define('DB_PASSWORD', 'Gnome10170982');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(PN;`3H(5Tr9BnZ2eMlwaUOb|eASnqJXPi$g6x>7*6k/rcR{u9ae7:<()N%IZ@4N');
define('SECURE_AUTH_KEY',  ';X:=3;;o8<TNF}&n^TxVUCUS:Xj5T`hMGn2]J[TA+x(0kd}#{Lj6zR<)Nmos8@s7');
define('LOGGED_IN_KEY',    'VE:p+[Y!MUE$.U-cJ^j_48My#;S]^|`UTS =p>rf?L|?~HH- WUb]t.iXYPFRNQp');
define('NONCE_KEY',        'U<27pXKOTX0mtr:iY@m=PWS|I7UqcIa{=fJjm?Q<1m@1*QF:;f6>Fbo>Nil}S<0$');
define('AUTH_SALT',        ' v;VbMgP@E%ud9!`=C|A*FTygZ#.bLs{q<[7H`QIy91/8?xpm>vh,#sTWwM(,baU');
define('SECURE_AUTH_SALT', '$|o=-sXQ_D^JREh<XlF*$;<*qpbtzA4nmU Z{xam5uVMt,sIrf&J{A%P:.|;,e5w');
define('LOGGED_IN_SALT',   'kPH]bZ-BlxJ]V>!o1dLFBC7ccxGn[9ROX]i: ]48aM{^B!p3)@R$W9X#/1O#g)XK');
define('NONCE_SALT',       'U^R+;6c+;H7Mdss!Ro?A*BL/75Z:(fLHOr5,oWNU83qjuL$`b@v[M9;L`0u-LXgI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


