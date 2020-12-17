<?php

try{
	$base=new PDO("mysql:host=localhost; dbname=id15552161_pruebas", "id15552161_root", "Morat_2203_oo");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios_pass WHERE USUARIOS= :login AND PASSWORD= :password";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);
	$resultado->execute();
	$numero_regristo=$resultado->rowCount();
	if($numero_regristo!=0){
	    session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header('location: ./datos.php');
	}else{
    	header('location: ./login.php');
	}
}catch(Exception $e){
	die("Error: " . $e->getMessage());
}
?>