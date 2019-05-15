<?php
include('registrarproducto.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Producto</title>
</head>
<body>

<form method="post">

	<div>
        <label >Codigo: </label>
        <input type="text" name="codigo" required="required" />
    </div>
    <div>
        <label >Nombre: </label>
        <input type="text" name="nombre" required="required" />
    </div>
	<div>
		<label >Tipo: </label>
        <select name="select">
 			 <option value="value1">Alimento</option> 
  			<option value="value2" >Vestimenta</option>
  			<option value="value3">Salud</option>
		</select>
    </div>

  <div>
        <label >Cantidad: </label>
        <input type="text" name="cantidad" required="required" />
    </div>
      <div>
        <label >Precio: </label>
        <input type="text" name="precio" required="required" />
    </div>
    <button>Registrar</button>
</form>

</body>
</html>

