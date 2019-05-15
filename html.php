

<!DOCTYPE html>
<html>
<head>
	<title>Registro Tienda</title>
</head>
<body>



<form  method="post">
	<div>
		
<label >Nombre Tienda: </label>
<input type="text" name="nametienda"  placeholder="Nom Tienda" required="required" >
	</div>
<div>
	
	<label >Usuario: </label>
<input type="text" name="username"  placeholder="Usuario" required="required">
</div>
<div>
	<label >Clave: </label>
<input type="password" name="password"  placeholder="password" required="required">
</div>
<div>
	<label >Repetir Clave: </label>
<input type="password" name="password2"  placeholder="password" required="required">
<button>Ingrese</button>
</div>

</form>

<?php include('guardar.php'); ?>

</body>
</html>

