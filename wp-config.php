<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'luizportfolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!%fe3vhi{-pg%NOq ZPq1wP=Zn!(P ,P^$w6ajur6p;R)(FeJ =FmY<(b),vXZ4-' );
define( 'SECURE_AUTH_KEY',  ',u6d`U?G~v!.Z?yJdlZZ;d|vYTM[!,.~was8Z`.Q[N}mzWEZVIt1ru?qf>m`-O}Q' );
define( 'LOGGED_IN_KEY',    'EL<XwNwMfMt`4paSfnN/5VZ`e&9VI~N/hZn/L!b;m~(|OkYk/1.v>h[M5qX}5RRv' );
define( 'NONCE_KEY',        '!lPc;#?DatKh+WdsC Z:2g2QC 8vVq)BAZW?=nkGS9@s--JrYCu/UTbii4@VZB*E' );
define( 'AUTH_SALT',        'HVV{1E!g:=763sLr*s`7:6H0pS&Aix+FEpUb=tjq&Nz!%>c#<Mg|ep[3K;3I38W!' );
define( 'SECURE_AUTH_SALT', 'mT&5fZ98kC4`e5Ibh4~(WWVoWG2ySff:p{^;P>sga{0?)i]X+DPKOfXkFG~4d$5f' );
define( 'LOGGED_IN_SALT',   'EDyB];4g}a$6UAxqhx)<>rN7w819/s7i<dR&{uW8q$DRSs[~eX436tZ||Ori dT5' );
define( 'NONCE_SALT',       'Rf8$VioWlG@X^hMDmcTPmi%kLTrwLO3Q:`@u6s3e:Y[i{Yel,g Usi*Xq&coA|&e' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
