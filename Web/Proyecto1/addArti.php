<?php 
	require('conex.php');
	 $nom=$_POST['nombre'];
     $precio=$_POST['precio'];
 	 $desc=$_POST['descrip'];
 	 $canti=$_POST['cantidad'];
 	 $insert= mysqli_query($con,"INSERT INTO `tienda` (`id`, `nombre`, `precio`, `descripcion`,`cantidad`) VALUES (NULL,'$nom', '$precio', '$desc','$canti')");
 	 header("Location:adminTienda.php");
      
 ?>