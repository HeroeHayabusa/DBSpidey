
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingresar Nuevo Registro</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="group">
  <form action="registro.php" method="POST">
  <h2><em>Ingresar Nuevo Registro</em></h2> 

      <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="nombre" class="form-input" required/>   
      
      <label for="apellido">Caracteristicas <span><em>(requerido)</em></span></label>
      <input type="text" name="Caracteristicas" class="form-input" required/>             
      
 <label for="apellido">Limpieza <span><em>(requerido)</em></span></label>
      <input type="text" name="Limpieza" class="form-input" required/> 
     <center> <input class="form-btn" name="submit" type="submit" value="Enviar" /></center>
    </p>
	</form>
</div>
</body>
</html>
<?php
include('menu.php');
?>