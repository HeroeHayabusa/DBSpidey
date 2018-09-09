<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, intial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<style>
table {
	margin-top: 10%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

td, th {
    border: 1px solid #dddddd;
    padding: 22%px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:hover td{
	background-color: #369681;
	color: white;
}
thead{background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
	text-align: center;
}
.main-container{
max-width: 1000px;
box-sizing: border-box;
}
	

	</style>

</head>
<body>
	<div class="Virus">
	</div>
<div id="main-container">
<?php
	$conn = new mysqli("localhost", "root", "", "Virus");

	$quer="SELECT * FROM Registro";
	$result = $conn->query($quer); 
	if ($result->num_rows > 0){
		//CABECERA DE TABLA
		echo "<center><table>";
		echo"<thead><tr><th>Id</th>
		<th>Nombre</th>
		<th>Descripción</th>
		<th>Forma de Limpieza</th>
		</tr></thead>";
while($rows=$result->fetch_assoc() ){
	//VARIABLES DE BD
	echo "<tr><td>".$rows["Id"].
	"</td><td>".$rows["Nombre"].
	"</td><td>".$rows["Descripcion"].
	"</td><td>".$rows["Limpieza"]."</td></tr>";
} 
 	echo "</center></table>";
}
    
mysqli_close($conn);
?>
<div class="group">
	<center><input class="form-btn"  onClick="window.location.href='http://localhost/DBVirus/inicio.php'" name="submit" type="button" value="Atrás" /></center>
  </form>
</div>


</body>
</html>