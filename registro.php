<?php

$conn = new mysqli("localhost", "root", "", "Virus");

$Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$Forma_de_Limpieza=$_POST['Limpieza'];

$query = "INSERT INTO Registro (Nombre, Descripcion, Limpieza) VALUES ('$Nombre', '$Descripcion', 'Limpieza')";

$resultado = $conn->query($query);

if($resultado)
{
	header('Location:Success.html');
}else{
	header('Location:Fail.html');
}
?>
