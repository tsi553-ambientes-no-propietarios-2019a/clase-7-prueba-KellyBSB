<?php 

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$conn = new mysqli('localhost', 'root', '1997', 'pruebab1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}