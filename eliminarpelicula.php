
<?php 
include("conexion.php") ;
   
    $id=$_REQUEST['id'] ;
    
    $insertar = "DELETE FROM pelicula WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablapelicula.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>