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
define('DB_NAME', 'realhome');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'IK0[IT9TE@a=lO[MP9O:-l}I@/QmDmEstu66%J![o?2xwa-Th<A{QISH3ocL ;cc');
define('SECURE_AUTH_KEY',  'p~{I*66.%47acQKW46Pn:4@`6M,W)Uj=%@x]gbAnf7Q,VsM%3&mZ-~P/x_t{}.^S');
define('LOGGED_IN_KEY',    '}0/L;Dm[B1thBN@RZ23 sE6Kvp+ m5,cOI.!*HiR52q^*l4uS>OPu@gi2tV3hCva');
define('NONCE_KEY',        'D*K6iMuFnH{yu2(3vTp!C<dXJvm6(4Gx9u[alf]L+2 Qa(ceXX8,o,SKiHTKh+WT');
define('AUTH_SALT',        'J)~M%3}%#=8G-{KEw?BjC2Ys%<`%G(Xp`fb){#pjP7?P dbI S7eMEiBvzF(36nf');
define('SECURE_AUTH_SALT', 'V+IL1$80Tl2-@tx*%g.RP/7TbDf*b6MU7r!0v7*@q/cJ@8(OgF!r|7r@.<Wm~.`}');
define('LOGGED_IN_SALT',   '(@/5Xp?{Z:g*4*LW-~Q;>g*Sy?.*Xy_Yjt{M|3UtED<i42jeed,Xd]Nz~-^I[(L4');
define('NONCE_SALT',       's7ZneCDrV(%v7iqv&5Fjsb+SU:`U0uZ}$KuT(Z<<gn,D=bt>OO!VD?V?hMD/jQP]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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