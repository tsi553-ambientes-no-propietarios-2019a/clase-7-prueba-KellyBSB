<?php

function redirect($url){
	header('Location: '.$url);
	exit;

}


if($_POST){


	$codigo=$_POST['codigo'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['select'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];


	


	$conn = new mysqli('localhost','root','','prueba1');

	if($conn->connect_error){

		echo 'existio un error'.$conn->connect_error;
	}else{
		echo 'se logro la conexion';
	}
if(!empty($_POST['codigo']) && !empty($_POST['nombre']) && !empty($_POST['select'])&& !empty($_POST['cantidad'])&&!empty($_POST['precio'])){
	$sqlinsert= "INSERT into  producto(codigo,nombre,tipo,cantidad,precio) Values('$codigo','$nombre','$tipo','$cantidad','$precio'))";
	
	$conn-> query($sqlinsert);
	echo "se registro el producto";
}else{
	echo "Llene todos los campos";
}
	
	
	






	

}
?>