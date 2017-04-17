
<?php 
	require('conex.php');
	 $id=$_POST['id'];
     $canti=$_POST['canti'];
 	 $insert= mysqli_query($con,"UPDATE `tienda` SET `cantidad` = '$canti' WHERE `tienda`.`id` = $id");
 	 header("Location:adminTienda.php");
 ?>
