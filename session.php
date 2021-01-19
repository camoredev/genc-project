<?php
session_start();

if(isset($_SESSION['email']) && empty($_SESSION['email']) == false ){

	//

} else {

	header("Location: login.php");
	
}

function Sair()
{
	session_destroy();
	header("Location: login.php");	
}

?>