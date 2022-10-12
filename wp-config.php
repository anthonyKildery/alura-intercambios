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
define( 'DB_NAME', 'banco_alura' );

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
define( 'AUTH_KEY',         'LD,UTb{UdJ-:N%_Q]$ISJ6O%j4g% g,3B}136BnL)OObd~TS(p7GW bn},Th,J:3' );
define( 'SECURE_AUTH_KEY',  '=s[8v>i$;a?=A}GMoiUS.Kf|@tr[:>5/e)$ZtM{jf(5k{L-V_rsWMJCwfP4i}=;s' );
define( 'LOGGED_IN_KEY',    '_>K!yXaSuHOTD^5+U3dp1p;~C +%-x8<RoK9ne|?ZK,$L.E2s`%CS3#6_,&_>9!m' );
define( 'NONCE_KEY',        'MNX=[6(7/Tk^A.zi[#(nW9|</Jg/VM=>Xx1jA #p>u`ZX*ECU^S_/|W2,Uewf_pE' );
define( 'AUTH_SALT',        'IIxOt#rT[r<`Y$ses^z~3`1fmj~^jA.74OGB}E!is|*}-y.qxx>DB^_58FAIf>j*' );
define( 'SECURE_AUTH_SALT', '=.* yJdb<t$h?U{h|NMeZm=nnw|GQkN>VwN[La 7SD7{c{J5,86zAbem=+pM2nN(' );
define( 'LOGGED_IN_SALT',   'Kj&5u<CJOn@Vud/g@gPp,M4Is^d9iF[*`]6r^}kV?s;r2!^&kG)H~c/o8(V7&#N*' );
define( 'NONCE_SALT',       ',V!Qr,L738;#sosfb+k0g|sF:aM-:^5?Xy-j1KO;v%w]dOFD)F9l>^C@oQgWh;;Q' );

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
