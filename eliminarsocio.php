<?php 

include("conexion.php") ;
   
    $id=$_REQUEST['id'] ;
    
    $insertar = "DELETE FROM socio WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablasocio.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>