<?php 
	session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	
	include "../conexion.php";

$query = "SELECT nombre, email, usuario FROM usuario ORDER BY idusuario ASC";
$result = mysqli_query($conection, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Usuarios.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Nombre', 'Email','Nombre de Usuario'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);
?>

