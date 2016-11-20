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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u339350735_new');

/** MySQL database username */
define('DB_USER', 'u339350735_root');

/** MySQL database password */
define('DB_PASSWORD', 'itsapassword');

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
define('AUTH_KEY',         '(%YQ+EH7<qoY@.cH#gx:6>9VQ(]F&BZCYfI&KIOjS)e5-[vS5/wNqu,s[cd|^MGs');
define('SECURE_AUTH_KEY',  'gZU4)P.&i`lj2wmFdNqd2qfKU[(g EyT%CwW(Ue|[Xx~D3ES]Mf;._Bl4@p1:#44');
define('LOGGED_IN_KEY',    'E!R8R/)CR2S4cqBLRd-(1+pA/SmL#1.SnQUx%hE}te%(O=mFa0)=a3-uWm}trnQV');
define('NONCE_KEY',        'Z65H9Z?o9t^~9w,5s0o3Da`]Mo?bbr_HA[PDzF+nsV(b;&Xj.[q*E32KO?29.f!B');
define('AUTH_SALT',        'rL>^tKm0[qo6M@dr-|4yppjFg#Kuc+Me]n$^LveYy3t-fnF$m~!vAnH?v$}-psD8');
define('SECURE_AUTH_SALT', 'Jl0s0aGtsDLedmg^,N=a7}{1/ZoO&BOi$2W^Ix@zn$:6DF/7JAhsD-E7r=Ka~ll!');
define('LOGGED_IN_SALT',   't.N5hW0is^dc/(>Wp{Fw^Hp-e.pN;tyg3lr2U}^}XdYfnI(GP366i(_9W!$kr8p0');
define('NONCE_SALT',       'NGW)qock~gM|jAtw5IoX^2C{L|ej]nD6chOs~GwY#M12k^IX+#%l8@9~tCL!)(W3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rc_';

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
