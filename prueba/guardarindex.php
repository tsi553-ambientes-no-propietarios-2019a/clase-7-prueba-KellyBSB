<?php

session_start();
include('coneccion.php');

$usuario='';
$clave='';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['usuario']) && !empty($_POST['clave'])) {

			$_SESSION['usuario'] = ($_POST['usuario']);
			$usuario=($_POST['usuario']);
			$clave = ($_POST['usuario']);

			$sql = "SELECT *
					FROM tienda
					WHERE usuario='$usuario'
					AND clave=MD5('$clave')";

			$res = $conn->query($sql);

			if ($conn->error) {
			echo "hay un error". $conn->error;
			}

			if($res->num_rows > 0) {
					while ($row = $res->fetch_assoc()) {
					$_SESSION['usuario'] = [
					'usuario' => $row['usuario'],
					'clave' => $row['clave']
					];
				//redire$_SESSION['usuario']ct('inicio.php');
					print("$_SESSION[usuario]");
				}	
			}else{
				echo 'los datos no coinciden';
			}



			}
	}



?>