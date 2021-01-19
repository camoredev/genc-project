<?php
/**
* Função autoload para carregar todas as classes do sistema
* a classe deve conter um nome class-nomedaclasse.php
*/

function __autoload($classname) {
	$file = ABSPATH . '/classes/class-' . $classname . '.php';
      if (file_exists($file)) {
      	echo $file;
          require_once $file;
          return true;
      }
      
      return false;
}

?>