
<!DOCTYPE html>
<html>
<head >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<title></title>
</head>
<body style="background-size:cover;" background="fondo.jpg">

  <div id='fondo'></div> 
	<div class="mb-2">
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
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

<br>
<br>
<br>
<br>
<br>

  <table style="background-color:white" class="table-sm table-bordered">
		<thead>
			<tr class="text-sm-center">
				<th colspan="10">Lista de Alquileres</th>
			</tr>
		</thead>
	    <tbody>
	    	<tr>
	    <th class="text-sm-center">Id</th>
		<th class="text-sm-center">Socio</th>
		<th class="text-sm-center">Pelicula</th>
		<th class="text-sm-center">Entrega</th>
		<th class="text-sm-center">Devolucion</th>
		<th class="text-sm-center" colspan="2">Operaciones</th>
	        </tr>
	    	<?php 
         	include("conexion.php") ;
            $insertar = "SELECT * FROM alquiler" ;
            $resultado = $conexion-> query($insertar);
            while ($fila=$resultado->fetch_assoc()) {
           ?>	
        <tr>
     	<td> <?php echo $fila['id'];?></td>
     	<td> <?php echo $fila ['socio'];?></td>
     	<td> <?php echo $fila ['pelicula'];?></td>
     	<td> <?php echo $fila ['entrega'] ;?></td>
     	<td> <?php echo $fila ['devolucion'];?></td>
      <td> <a class="btn btn-info btn-sm " href="modificaralquiler.php?id=<?php echo $fila['id']; ?>"> Modificar</a></td>
     	<td> <a class="btn btn-danger btn-sm" href="eliminaralquiler.php?id=<?php echo $fila['id']; ?>"> Eliminar</a></td>
     	</tr>
            <?php 
 				}	
             ?>
           

	    	 
   
      </tbody>
  </table>

 </center>

<center>
  <br>
  <br>
 <a class="btn btn-success" href="formulariopelicula.php"> Agregar Alquiler</a> </center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>

</html>
