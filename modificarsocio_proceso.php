<?php 

include("conexion.php") ;
    $id=$_REQUEST['id'] ;
    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];

	$insertar = "UPDATE socio set nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono',email ='$email', direccion='$direccion' WHERE id='$id'" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablasocio.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>