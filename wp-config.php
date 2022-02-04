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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'infoproduto02' );

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
define( 'AUTH_KEY',         'KG,^jTY}|klUy}>K@g2+F^Bd7W?N`TZOO*~}ZI{rTL61~(fKe=u|{V#:jVB{.L2w' );
define( 'SECURE_AUTH_KEY',  '@*c^TyP>x/&l}FNf)--*Fx.l$N=`A&$6m+k?F~Qaon6C)sj2`>_C3NL|PrDERJRY' );
define( 'LOGGED_IN_KEY',    '/69C^a^1^OK#KhqPA3weX,BRW:iq5Rf2C5*yk`dvt8=(]BoQ7`)3WJG>PHlJ#yM%' );
define( 'NONCE_KEY',        '!ADwi-K_Z R2>M%ZvkMMKW>$U8!qO@-zCrfSUUY8g0P%(>Km/0^.v2NU`?Ws)RJp' );
define( 'AUTH_SALT',        ' &f$jW9F.K!`X9xTG..c,sBY>-<B+i6Sw,Lq(48qCPI2q$-*)Ybb/_6x#>9T7,ln' );
define( 'SECURE_AUTH_SALT', 'qOl{;Z9xXP/TR]QZ)4S(zX=fg/pk@=c=8q6MU3#&$2D$(ib#(o:i?]w5C#u pJ/d' );
define( 'LOGGED_IN_SALT',   'glKjet6_XH+[>bO9Tet#10|YoI|KqGmw<v`z.!ff$;*w50a>#cS+FKb=,g^#v6yv' );
define( 'NONCE_SALT',       '{d7XqFzQMPGELogo] *zUgrJ854eDjuu(Fu;;k*_j5%$`a vv9{E?O,Fk#65[(f(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ip_';

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
