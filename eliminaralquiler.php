<?php 
include("conexion.php") ;
   
    $id=$_REQUEST['id'] ;
    
    $insertar = "DELETE FROM alquiler WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablaalquiler.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>