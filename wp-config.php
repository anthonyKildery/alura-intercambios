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
define( 'AUTH_KEY',         '43@kZTQ@38~WPGr9<}$v@>sKZ)Yb%]Jye;SOf$_BJ]&yOl&*Hc$iq/x(DEvT`RwG' );
define( 'SECURE_AUTH_KEY',  '_cCk#xQjy><Pm,NC*/@?I-Om/s#liG&VL4r&o;}:`R.c3hMu]uVLQEUs,?&h~%d.' );
define( 'LOGGED_IN_KEY',    'J8]`6tUt $SG.1TC&rDp;~UrrqOqJk_OnueV#U?eq<H!FrusLT9vI(dDCKV(j,]Y' );
define( 'NONCE_KEY',        '`3(bH}yVl3M#4w@}T<`Ci(:NkpvMJpg&_qsOLew4jH.J#}u)HdD5&oE;Ib4u#<:!' );
define( 'AUTH_SALT',        'n(o@l=*M,W,/jh-Ht-S `@@+}%CsP|H1):ZN!fX1$C%3SbCY ?[:tf>H+6NuMIQE' );
define( 'SECURE_AUTH_SALT', '`.v!W1:KYU6#*@iNw_xXJ>#m=w>f2^nuKfs[{^P8rCAp:FpJtDcaY[S.z|gkc#RE' );
define( 'LOGGED_IN_SALT',   ']D}wnEZf!1PFSB0%Cq5*O<0m=-EFtv,p{(^~O;D Za|sh]kZ1U]SR+7_Li#)frqF' );
define( 'NONCE_SALT',       '~&x`{3,3Hd-gGkRK(+V@>J*G.HOH. bTjC  #Wg;1&mSor8?=,,7WK8Va-;z)in*' );

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
