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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C~axp0-|qfD|@$gE,CDZy0CaD=WUBrq*:iB8^3jY4m^}G@]47nnaz9u1PB.i,Xd5' );
define( 'SECURE_AUTH_KEY',  '-lfzzF7~&03dO,?Qh9hFHn`DP?rO#L]DE+[]Ko,$0m}KYz&&<anNPmCqe5e)-.|B' );
define( 'LOGGED_IN_KEY',    ',d ==Yc8b(e.<9 R|#*r0/fx7z[pwqaFw6#*dWNPa*OF)gu7H#ldrzo:0-_a9Zs)' );
define( 'NONCE_KEY',        'Z;3;G]oGj>@9KaYN?_*NEj6rv[rC; O>OZV )]O*HU]IeAPQ#XKW1Z0_j),[p{/L' );
define( 'AUTH_SALT',        ' =[#xnN:m-KUax%)qc%d+S$sQ}@3)su81#n!o>98vr?_yS*P[h%W;I.W6Cj=  nx' );
define( 'SECURE_AUTH_SALT', '(R =nN=(x(#COM{y!_+i&Dj#I@8Ag|~]Ptk]Jb;*Dl]#lnA*G7+_9:/^-MUm3C%<' );
define( 'LOGGED_IN_SALT',   'Zm6>YSwrE+53JbKM!kF8-Avz%_>A=*<ZHs9L=7Al0S3Lm-*<-2Z(Pb:uHi[!-7fl' );
define( 'NONCE_SALT',       'W*t[bvPQW~5:<0+6wTa_(~WB.g9tJ2&oxeF[u42?P=~kNJKJ(-NF*S-A#Ml7rANk' );

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
