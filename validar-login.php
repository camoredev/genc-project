<?php
session_start();

if (isset($_POST['email']) && empty($_POST['email']) == false ) {
	if (isset($_POST['senha']) && empty($_POST['senha']) == false ) {
	    $email = addslashes($_POST['email']);
	    $senha = md5(addslashes($_POST['senha']));	    

	    try{
	    	//$banco = new mysqli('2.57.89.174', 'u743118769_pfc', 'senaipfc' ,'u743118769_pfc');
			//$res = new Usuario($email);
		    //if ( $res -> rowCount() > 0) {
	    	
		    	//$dados = $res -> fetch();

		    	$_SESSION['email'] = $_POST['email'];

		    	header("Location: index.php");

		    //}	    
	    }catch(PDOException $e){
	    	echo "Falhou".$e->getMessage();
	    }
	    
	    
	    
	}
}

?>