<?php

include('coneccion.php');

if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['clave2'])   && !empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['clave']) && !empty($_POST['clave2'])) {

		$nombre = $_POST['nombre'];
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];
		$clave2 = $_POST['clave2'];

		if($clave==$clave2){

			$sql_insert = "INSERT INTO tienda
			(nombreTienda,usuario,clave,clave2)
			VALUES ('$nombre','$usuario', MD5('$clave'),MD5('$clave2'))";

			$conn->query($sql_insert);

			if ($conn->error) {
				echo 'Ocurrió un error ' . $conn->error;
			} else{
				echo' datos registrados correctamente';
				redirect('index.php');
			}

		}else{
			echo'las contraseñas no coinciden';
		}

		

	} else {
		echo 'ingrese todos los datos';
	}
}
