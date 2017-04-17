<?php 
require('varSession.php');
require('conex.php');
  if ($_SESSION['type']== 1) {
     echo $_SESSION['type'];
 	 header("Location: admin.php");
 	}
  else{
 	  header("Location: resultado.php");
 	 }
?>