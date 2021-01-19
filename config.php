<?php
/**
* Configuração geral
*/

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/views/uploads' );

// URL da home
define( 'HOME_URI', 'http://mcrmdev.com/' );

// Nome do host da base de dados
define( 'HOSTNAME', '2.57.89.174' );

// Nome do DB
define( 'DB_NAME', 'u743118769_pfc' );

// Usuário do DB
define( 'DB_USER', 'u743118769_pfc' );

// Senha do DB
define( 'DB_PASSWORD', 'senaipfc' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';

$GLOBALS['banco'] = new mysqli(HOSTNAME, DB_USER, DB_PASSWORD, DB_NAME);

?>