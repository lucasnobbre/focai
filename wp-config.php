<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'foca');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v=M@Rs-,l%3U6C`xJh`W(!{0iVN9@cl+4da2k=F/AcWu}4I<=K6<)oO/1[t0G1AX');
define('SECURE_AUTH_KEY',  '$+%sjnuJrM~hnC!fvllX#R<Z0iTg&J?P=R+|K#;ikB?<QxI74,63.;dH~R6=GEdT');
define('LOGGED_IN_KEY',    'fKc-v quSVQf_cVFD|C<s),kA?u.-@Wk@W}|6&%uonavMmJ[1jy8;f^=5IHo{Zn|');
define('NONCE_KEY',        '+`jk9cun1?)&b$)D++>0s+,|#wnP>{{@XEN0z=|`SB(dl^1d,aYj](4$>jC#@1RN');
define('AUTH_SALT',        'xFnBaGsVwf3 F e,:8ywjW&h: I*yKHM=`b0u}+!u[#g&]:O,YMr08b}Q|*+x-x0');
define('SECURE_AUTH_SALT', '~$Q,$W>f@y%^sKx:|S43w{-B3Yi^)TY.(+gOskP%=o*:`fu0iZLp%$H]`0#mPsYJ');
define('LOGGED_IN_SALT',   '8H o/a}( !-{iS!@Fhrhf@N*SkCl#@REvH<t})<W|#@V&F5X+(]^_Cqwmy:3K|C9');
define('NONCE_SALT',       'w.2`A1>`WE>U$j.4;+_<?G]j-u3muKGH6:TpR_ NeKPV`[y-@fi .vLJ?R(]o#6 ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('JETPACK_DEV_DEBUG', true);

define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');