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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1_a`*Pqyl)lfu.AzX+i6v+(qV$R} 9&EKKl&+|Y|Xa@:whx%y9$rGOd|4Ft7;yM.' );
define( 'SECURE_AUTH_KEY',  'hWCSNBcW,=DSW5#Y%=OOcTX%N*ml7d_,X~mWBe~}=nTa[Db:f<@FN;Mr*uE#{);:' );
define( 'LOGGED_IN_KEY',    ',Xy)n)_4mUajD9#|`f7Ct;#-ti!&43Gn`d<{BFmZvd.rc6LHF8y0Etv|,K)&fxVr' );
define( 'NONCE_KEY',        'Y$4hBNxEg-F= mX~9hm0%q_TZ7X&}44#Z~vENd:V7y+-Y2CN9QNYcM{;}EP16/9M' );
define( 'AUTH_SALT',        '_U&Sn|/d|T5q3+l0>PMgc,X)0_mIy9mj|9<r*Wpsnn?)lvWx;Q@ &cbo2$H6M hI' );
define( 'SECURE_AUTH_SALT', 'FB+6W~%u6 Ja?N^PT@DpuQP=V.er0aU`S;z;;_j:0c!N>9$kRYW:9!>P9<v>nk?6' );
define( 'LOGGED_IN_SALT',   '8dghwyzQ4r6h1pUVO%tG}J3BF?c;Jak`rv^sr| j0$|apANN:tiPsb}y;gPf-n7!' );
define( 'NONCE_SALT',       'zD{l|sO.,pP.ZJ`utgZ,qjnF@y.h/[mrPau`/QuE`0H_A; OckDOB}<]Pu0}o.NW' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
