<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp2018');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(U((uvjH23nZT)=EYV%fF:PNagT[`tc=yB!sJ<]l5F-PM~5Ew|Jkg23 tGWvOr|.');
define('SECURE_AUTH_KEY',  '>S@6x&S_{kixrK^mf_ok1$!<z1a=dhHW%(>xfM1[8O3uV)LZ2k$_kn!92mr4!xH?');
define('LOGGED_IN_KEY',    'M^?>};x!9r>biPwwr L@~2!?57l5^S@b/1_Yfv|%Z`w(X38o_@GGiM]?;j4kN4QW');
define('NONCE_KEY',        'xnM-FPq53;iJ_wGgOcb*X<Mdl!j{?O($zQ]e|60kD)tK_m07;_BT,FfoK,F.[+yj');
define('AUTH_SALT',        'm0>ia7<87WWNT.I=;G+DPNZe{Msz{,UdkKaLq8K3,,!CaIm6Rv}Lj}t@CC0M:QcD');
define('SECURE_AUTH_SALT', '$TZE5/welFe[iz%b=Eh7$k_3y8K=_/o,B,[0|S!AjY,zodAs}-?I$*C_a=(D.c;-');
define('LOGGED_IN_SALT',   'W_5#q*r@Vf[?uJwV23X/gw7CUBCGmWCv?Iw[^*>k5&3u9LNC9[g8T2XZVm>WOpMi');
define('NONCE_SALT',       'irl;MR9o((?U*Z~9/:p^8IuW`oM79~M}iz]NKGQDFH*|@7m@2/p9H6!Cm,qzxFCn');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'anis_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');