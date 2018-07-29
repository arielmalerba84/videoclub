<?php 

include("conexion.php") ;

    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];

	$insertar = "INSERT INTO socio (nombre , apellido ,dni ,telefono , email , direccion) VALUES ('$nombre', 
	'$apellido','$dni','$telefono','$email','$direccion')" ;

	$resultado = $conexion ->query($insertar) ;

	if ($resultado) {
	 	header("location: tablasocio.php");
	 } 
     else {
     	echo "error de conexion";
     }


 ?>