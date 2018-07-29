<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<title> Ingresar Datos Socios</title>
</head>
<body style="background-size:cover;" background="asylum.jpg">
	<div class="mt-2">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Video Club Monte Castro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Socio
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="tablasocio.php"> Lista Asociados</a>
          <a class="dropdown-item" href="formulariosocio.php">Agregar Socio</a>
      
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Peliculas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="tablapelicula.php"> Lista Peliculas</a>
          <a class="dropdown-item" href="formulariopelicula.php">Agregar Pelicula</a>
        
        </div>
      </li>
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alquileres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="tablaalquiler.php"> Lista de Alquileres</a>
          <a class="dropdown-item" href="formularioalquiler.php">Agregar Alquiler</a>
         
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>





<center>
	
<div class="rounded bg-primary mt-3 mb-3 p-3 w-50">
	
	<?php 
			$id=$_REQUEST['id'] ;
			include("conexion.php") ;
            $insertar = "SELECT * FROM socio WHERE id='$id'";
            $resultado = $conexion-> query($insertar);
            $fila=$resultado->fetch_assoc();
     ?>	

<h3>Modificar Datos Socios</h3> 

<form action="modificarsocio_proceso.php?id=<?php echo $fila['id'];?>" method="POST">
	
           <div class="form-group" >
	<label for="exampleFormControlInput1"> Nombre</label><br>
	<input  type="text" class="form-control-sm" id="exampleFormControlInput1" REQUIRED name="nombre" value="<?php echo $fila['nombre']; ?>"> 
          </div>
          <div class="form-group" >
	<label for="exampleFormControlInput1"> Apellido</label><br>
	<input type="text" class="form-control-sm" id="exampleFormControlInput1" REQUIRED name="apellido" value="<?php echo $fila['apellido']; ?>">
	       </div>
	       <div class="form-group">
	<label  for="exampleFormControlInput1"> DNI</label> <br>
	<input type="text" class="form-control-sm" id="exampleFormControlInput1"REQUIRED name="dni" value="<?php echo $fila['dni']; ?>"> 
	       </div>
	       <div class="form-group" >
	<label for="exampleFormControlInput1"> Telefono</label><br>
	<input type="text"  class="form-control-sm" id="exampleFormControlInput1" REQUIRED name="telefono" value="<?php echo $fila['telefono']; ?>"? >
	      </div>
	      <div class="form-group" >
	<label for="exampleFormControlInput1"> Email</label><br>
	<input type="email" class="form-control-sm" id="exampleFormControlInput1"  REQUIRED name="email" value="<?php echo $fila['email']; ?>">		  </div>
          <div class="form-group" >
	<label for="exampleFormControlInput1"> Direccion</label><br>

	<input type="text" class="form-control-sm" id="exampleFormControlInput1" REQUIRED name="direccion" value="<?php echo $fila['direccion']; ?>" >
	       </div>
	<br>
  <input class="btn btn-dark" type="submit"  value="Aceptar">
	</form>
	</div>
     
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>