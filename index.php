<?php
echo "Tienda registrada correctamente, puede iniciar sesión.";
include('verificar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form  method="post">
<div>
<label >Usuario: </label>
<input type="text" name="username"  placeholder="Usuario" required="required">
</div>
<div>
<label >Clave: </label>
<input type="password" name="password"  placeholder="password" required="required">
</div>
<button>Ingrese</button>
</div>

<div><a href="html.php">Registrar mi tienda</a></div>


</form>
</body>
</html>
