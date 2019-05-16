<?php
session_start();
if($_SERVER['SCRIPT_NAME'] != 'guardarindex.php' && $_SERVER['SCRIPT_NAME'] != 'index.php' && !isset($_SESSION['usuario'])){

	redirect($_SERVER["HTTP_HOST"] . 'index.php');

}elseif ($_SERVER['SCRIPT_NAME'] == 'index.php' && isset($_SESSION['usuario'])) {
	
	redirect($_SERVER["HTTP_HOST"] . 'nuevoProducto.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Registro Producto</h1>
    <form method="post">
         <div id="content">
      
                    <label>codigo</label><br>
                    <input  name="codigo" type="text" required="required" /> <br>
                    <label>nombre</label><br>
                    <input  name="nombre" type="text" required="required" /> <br>
                    <label>Tipo</label><br>           
					  <select name="tipo" required="required">
					      <option value="alimento">alimento</option>
					      <option value="vestimenta">vestimenta</option>
					      <option value="salud">salud</option>
					   </select>
					      <br>			

                    <label>cantidad</label><br>
                    <input  name="cantidad" type="text" required="required" /> <br>
                    <label>precio</label><br>
                    <input  name="precio" type="text" required="required" /> <br>                         
                   <button>Resgistrar</button>
                  
         </div>
     </form>

<?php include('guardarNuevoProduco.php'); ?>

</body>
</html>

