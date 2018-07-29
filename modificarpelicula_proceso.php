<?php 

include("conexion.php") ;
    $id= $_REQUEST['id'] ;
    $peli = $_POST['peli'];
	$genero = $_POST['genero'];
	$director = $_POST['director'];
	$anio = $_POST['anio'];
	

	$insertar = "UPDATE pelicula set peli='$peli', genero='$genero', director='$director', anio='$anio'WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablapelicula.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>