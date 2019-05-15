<?php

function redirect($url){
	header('Location: '.$url);
	exit;

}

if($_POST){

	$nametienda=$_POST['nametienda'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	


	$conn = new mysqli('localhost','root','','prueba1');

	if($conn->connect_error){

		echo 'existio un error'.$conn->connect_error;
	}else{
		echo 'se logro la conexion';
	}

	if($password==$password2){

	$sqlinsert= "INSERT into  tienda(NombreTienda,Usuario,Clave,RepetirClave) Values('$nametienda','$username', MD5('$password'),MD5('password2'))";
	$conn-> query($sqlinsert);
	echo "contraseñas correctas";

	redirect("index.php");
	
	}else{

		echo "las contraseñas no son correctas";

	}






	

}
?>