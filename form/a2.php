<?php
$mysqli = new mysqli('localhost','root','1234567890','pruebas');

if($mysqli ){
	echo "ok";
}
    $Nombre = trim($_POST['nom']);
	$A_Paterno = trim($_POST['apa']);
	$A_Materno = trim($_POST['ama']);
	$Fecha_nacimiento = trim($_POST['nac']);
	$Fecha=date("d-m-Y");
	$Domicilio = trim($_POST['dom']);
    $Email = trim($_POST['email']);
	$T_Celular = trim($_POST['tcel']);
	$T_Casa = trim($_POST['tcas']);
	$pais = trim($_POST['pais']);
if($pais==1){
$pais = "Prescolar";
}else if($pais==2){
$pais = "Primaria";
}else if($pais==3){
$pais= "Secundaria";
}else if($pais==4){
$pais= "Bachillerato";
}else if($pais==5){
$pais = "Licenciatura";
}else if($pais==6){
$pais = "Maestria";
}else if($pais==7){
$pais = "PostGrado";
}else if($pais==8){
$pais = "Idiomas";
} else if($pais==9){
$pais = "Otros Cursos";
}
	$tipoBeca = trim($_POST['tipoBeca']);
	$consulta = "INSERT INTO usuarios_pass2(Nombre,A_Paterno,A_Materno,Fecha_nacimiento,Fecha_sol,Domicilio,Email,T_Celular,T_Casa,Estudios,Op_Estudi) VALUES ('$Nombre','$A_Paterno','$A_Materno','$Fecha_nacimiento','$Fecha','$Domicilio','$Email','$T_Celular','$T_Casa','$pais','$tipoBeca')";
	
    $mysqli->query($consulta);

	echo $consulta;
	
	
?>