<?php 

include("conexion.php") ;

    $peli = $_POST['peli'];
	$genero = $_POST['genero'];
	$director = $_POST['director'];
	$anio = $_POST['anio'];

	$insertar = "INSERT INTO pelicula (peli, genero, director, anio)  VALUES ('$peli', 
	'$genero','$director','$anio')" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablapelicula.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>