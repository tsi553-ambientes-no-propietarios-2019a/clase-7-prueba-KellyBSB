<?php
include('guardarindex.php');

//session_start();

 if($_SERVER['SCRIPT_NAME'] != 'guardarindex.php' && $_SERVER['SCRIPT_NAME'] != 'index.php' && !isset($_SESSION['usuario'])){

	redirect($_SERVER["HTTP_HOST"] . 'index.php');

}elseif ($_SERVER['SCRIPT_NAME'] == 'index.php' && isset($_SESSION['usuario'])) {
	
	redirect($_SERVER["HTTP_HOST"] . 'inicio.php');
}



$sql = "SELECT * FROM producto";

$res = mysql_query($conn,$sql);

 ?>


        <!DOCTYPE html>
        <html>
        <head>
        	<title></title>

        	  <link rel="stylesheet" href="estilo.css">
        </head>
        <body>
        
        	<h3>Productos de  la tienda</h3>

				<table class="egt">
					<thead>
				  <tr>

				    <th>Codigo</th>
				    <th>Nombre</th>
				    <th>Tipo</th>
				    <th>Cantidad en Stock</th>
				    <th>Precio</th>


				  </tr>

				</thead>

				  

				 <?php   while ($row = mysql_fetch_array($res)){?>
				 	<tr>
				  	<td>
				  		<?php  echo $row['codigo']; ?>
				  		<?php  echo $row['nombre']; ?>
				  		<?php  echo $row['tipo']; ?>
				  		<?php  echo $row['cantidad']; ?>
				  		<?php  echo $row['precio']; ?>

				  		
				  	</td>

				  	</tr>

				  <?php } ?>

				 
				</table>

		<br>
        <a href='nuevoProducto.php'>Registrar nuevo producto</a>
 		<br>
        <a href='cerrar.php'>logout</a>
        </body>
        </html>