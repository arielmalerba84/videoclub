<?php 

include("conexion.php") ;

    $socio = $_POST['socio'];
	$pelicula = $_POST['pelicula'];
	$entrega = $_POST['entrega'];
	$devolucion = $_POST['devolucion'];

	$insertar = "INSERT INTO alquiler (socio, pelicula, entrega, devolucion)  VALUES ('$socio', 
	'$pelicula','$entrega','$devolucion')" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablaalquiler.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>