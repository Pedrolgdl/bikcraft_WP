<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpdb_bikcraft' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'CB;n)!NoZv0!pqx[/i2yttD@A:4kuzB<&pGeskPxnb#%b9T{)u3dbiTAINqj5=Jx' );
define( 'SECURE_AUTH_KEY',  'A)0z4}_T>5tSATZd!l&/zW@pP|4G~u?L*]K: }fJurU|Q*g1RAR^nl^*@wsBi5Bx' );
define( 'LOGGED_IN_KEY',    'l{0L9d&nF_wa(g)_++AD9EK.wUgyZ?EMqn;Udw] g0EG#Gim_-H]9<t1>g!WEl6p' );
define( 'NONCE_KEY',        '*3MH_*|52DpFGQmkdI_2ik;^DPX+xQgct<F|ZOthUH%C3|z*=b&MhO)*35vs0(2K' );
define( 'AUTH_SALT',        '*|5Dbz.Xx1A)Y]F`/MrG@T3|>+/.j`ly~Es!E<Tk9BF9i?&h&N.*~RXdWPnYNzsD' );
define( 'SECURE_AUTH_SALT', 'GT8WV@(S^MSh#CmvMNJqKoS X6}K+$Y!+)l{k>JV0TH< h8^)5M,sIOOS#Y.G^tu' );
define( 'LOGGED_IN_SALT',   '*X0?h1sVV4ixsVrL0qoULOz$VjuTPgBjv1dKC8j[]-!bRTt[hOJ,(DBe;=T&z.rg' );
define( 'NONCE_SALT',       'E QL^Ww d!G@b:aA:HjT]hxE=>N`QCv^$^GV;L7TKywEIVS7N;%B9exQHjc_1JO)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
