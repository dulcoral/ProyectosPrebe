<?php 
require('conex.php');
 	 $user=$_POST['user'];
 	 $edad=$_POST['edad'];
 	 $pass=$_POST['pass'];
 	 $tipo=$_POST['tipo'];
 	 $email=$_POST['email'];
 	 $insert= mysqli_query($con,"INSERT INTO `usuarios` ( `id`,`usuario`, `password`, `clase`, `email`, `edad`) VALUES (NULL,'$user', '$pass', '$tipo','$email','$edad')");
 	 header("Location: admin.php");
?>
