<?php 

include("conexion.php") ;
    $id= $_REQUEST['id'] ;
    $socio = $_POST['socio'];
	$pelicula = $_POST['pelicula'];
	$entrega = $_POST['entrega'];
	$devolucion = $_POST['devolucion'];
	

	$insertar = "UPDATE alquiler set socio='$socio', pelicula='$pelicula', entrega='$entrega', devolucion='$devolucion'WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablaalquiler.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>