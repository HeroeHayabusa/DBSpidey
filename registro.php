<?php
	require 'conexion.php';
	$sentencia = $connection->prepare("INSERT INTO `prueba-virus`(Nombre,Caracteristicas,Limpieza)values(:name,:description,:clean)");	
	$sentencia->bindParam(':name',$_POST["Nombre"],PDO::PARAM_STR);
	$sentencia->bindParam(':description',$_POST["Caracteristicas"],PDO::PARAM_STR);
	$sentencia->bindParam(':clean',$_POST["Limpieza"],PDO::PARAM_STR);
	if($sentencia->execute()){
            header('location: ../Success.html');
        }
        else{
            header('location: ../Fail.html');
        }
?>