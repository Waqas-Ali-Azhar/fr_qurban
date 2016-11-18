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
define('DB_NAME', 'fru');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+[Xzj2X!rQg>DhP3N/^(TV3DesdLbTBI&JMZ7p_>90F%TIi7By9]x^w=M0N#QGK ');
define('SECURE_AUTH_KEY',  'FK@Y=;]x! z4%92`r%8se5-PSe1Xm~5+12<auR@1j^3dJLhZHXO-ZTY.BSCvj_]j');
define('LOGGED_IN_KEY',    '&>yerU^*4J:*UhEbRM)}mF=}?tB5H,Ae+Ru-(tf$sS[=ppVYv30&/Mbxw-t1Uk@x');
define('NONCE_KEY',        '86IzSe)ms23aL#&A?I?[sBR*G4IS]/I,<0ieRH>@Cyu=PNUH:@s;-`{;iC{,nJ|y');
define('AUTH_SALT',        'mAgV`?vkkIs.`hD/gJ&eMs AY*v;G~oE!)e=bmj$pPg?/25VlPc.%o#Z]ZOO1<y=');
define('SECURE_AUTH_SALT', 'HP,*IXEJSeieQ8LlV1IE,fQ~rVyPN~:>>d/??Tj`lc[06`7Ph<,3:S;p^a{@}TnL');
define('LOGGED_IN_SALT',   'j(OeqW<J7&g+-{/79cR)*lT(1I#A)Dn:9b0@Gp9>@{O+3FH#r+d4fHx1!se:098g');
define('NONCE_SALT',       '`ks3gUa6hM8>yag$`L79.~b!Rmx%F<FRnq1:n-+s3`-V:)a5t8na1+w(PdH~IP0`');

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
