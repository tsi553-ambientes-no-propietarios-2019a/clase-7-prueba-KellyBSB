<?php 
include('guardar.php');
if($_POST) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM tienda
		WHERE Usuario='$username'
		AND Clave=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'username' => $row['Usuario'],
						'password' => $row['Clave']
					];
					echo "Bienbenid@ $username";
					redirect('inicio.php');
			}
		} else {
			echo "Usuario o contraseña incorrectos.”";
		}


	
}
