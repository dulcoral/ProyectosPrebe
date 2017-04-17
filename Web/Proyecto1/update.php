<?php
   	require('conex.php');
   	require ('varSession.php');

   	$contra=$_GET['contra'];
   	$id=$_SESSION['id'];
    $consulta=mysqli_query($con,"UPDATE `usuarios` SET `password` = '$contra' WHERE `id` = '$id';");
    header("Location: escritorio.php");

 ?>