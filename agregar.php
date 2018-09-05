
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

      <label for="Nombre">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="Nombre" class="form-input" required/>   
      
      <label for="Descripcion">Descripcion <span><em>(requerido)</em></span></label>
      <input type="Descripcion" name="Descripcion" class="form-input" required/>             
      
 <label for="Forma_de_Limpieza">Forma de Limpieza <span><em>(requerido)</em></span></label>
      <input type="text" name="Forma_de_Limpieza" class="form-input" required/> 
     <center> <input class="form-btn" name="submit" type="submit" value="Enviar" /></center>
    </p>
  </form>
</div>
</body>
</html>
<?php
include('menu.php');
?>