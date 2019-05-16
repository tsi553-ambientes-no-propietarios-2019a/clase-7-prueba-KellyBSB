
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Registro Tienda</h1>
    <form method="post">
         <div id="content">
                    <label>Nombre Tienda</label><br>
                    <input  name="nombre" type="text"  required="required" /> <br>
                    <label>Usuario</label><br>
                    <input  name="usuario" type="text"  required="required" /> <br>
                    <label>Clave</label><br>
                    <input  name="clave" type="password"  required="required" /> <br>
                    <label>Repetir Clave</label><br>
                    <input  name="clave2" type="password" required="required" /> <br>
                   <button>Resgistrar</button>
                  
         </div>
     </form>
<?php  include('guardarregistro.php'); ?>
    
</body>
</html>
