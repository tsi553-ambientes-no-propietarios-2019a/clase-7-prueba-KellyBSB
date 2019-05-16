<?php
include('coneccion.php');
if($_POST) {
	/*if (isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['cantidad'])  && isset($_POST['precio']) && !empty($_POST['codigo']) && !empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['cantidad'])) && !empy($_POST['precio'])) {*/

		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$cantidad = $_POST['cantidad'];
		$precio = $_POST['precio'];

		$sql_insert = "INSERT INTO producto
			(codigo,nombre,tipo,cantidad,precio)
			VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio' )";

			$conn->query($sql_insert);

			if ($conn->error) {
				echo 'Ocurrió un error ' . $conn->error;
			} else{
				echo' el producto se registro correctamente';
				redirect('inicio.php');
			}


	/*	}else{
	echo "Llene todos los campos";
		}*/
}

?>