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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '%&l5SbCa#On2B0I%^l6Y45FA');

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
define('AUTH_KEY',         ':,r@Hulonc3sR4=!Gl<KwU-^}Vqk-;u?a&lc:$rCp(;mRiqf9d`C4;)4RZOj*6.W');
define('SECURE_AUTH_KEY',  'oMWJA`:Kk&5i(D`huSFb.J=l`Xe!j2OkpG0izh~rV_^t=KV!=p&CMxs7com pn}k');
define('LOGGED_IN_KEY',    ';%zew,{#E_wn+*1|^~N-hdrO<xVH[E4eEBarAtCpK9Q/u}V6n@i)byL5HjviM?3T');
define('NONCE_KEY',        '1ao.)x9/Ue;@[-XP#Q!#jaAi(z{fqB/3DH`m_:Zd0hTQ;HC^>,4:sl((d22A^5aC');
define('AUTH_SALT',        'A%vZiXpz1^vwD?Zm]Vu^1{EE-JT/c-*1QbP3}5 1%qHDGFo^R//]>]e!qq<c<*a`');
define('SECURE_AUTH_SALT', '?a7_4L}bt`F:I#)27{Q:F!OQBQ E|f~N~*%1j4z/-.X<L$XgZ16tt.q>}cCG~cy5');
define('LOGGED_IN_SALT',   'QmaCqy?=[H&YA@<076OhKY|fJhlWdRO6N/%F=F0qU[>-|Cl6aWMe.xA_eY^7_ G)');
define('NONCE_SALT',       'QTQXa*BBDgq<oAS~[.&oJETKE|In-;; _{8s=uw7!=Of@gGGc5>2+~hHk$QUOZ=A');

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