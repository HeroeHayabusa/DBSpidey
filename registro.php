<?php

$conn = new mysqli("localhost", "root", "", "Virus");

$Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$Forma_de_Limpieza=$_POST['Forma_de_Limpieza'];

$query = "INSERT INTO Registro (Nombre, Descripcion, Forma_de_Limpieza) VALUES ('$Nombre', '$Descripcion', '$Forma_de_Limpieza')";

$resultado = $conn->query($query);

if($resultado)
{
	header('Location:Success.html');
}else{
	header('Location:Fail.html');
}
?>
