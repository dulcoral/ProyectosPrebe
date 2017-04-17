<?php 
	require('conex.php');
	  $id=$_GET["id"];
      $query ="DELETE FROM `usuarios` WHERE `tienda`.`id` = $id";
      $result = mysqli_query($con,$query);
      header("Location: admin.php")
      
 ?>