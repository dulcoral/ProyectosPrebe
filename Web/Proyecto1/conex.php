<?php
 
//Variables de conexion a la base de datos
$host="localhost"; // Nombre del host 
$username="root"; // usuarioMysql 
$password=""; // password Mysql 
$db_name="loginweb"; // Nombre de la BD

// Conexion y seleccion de la databse.
$con = mysqli_connect("$host", "$username", "$password") or die("cannot connect"); 
mysqli_select_db($con,$db_name) or die("cannot select DB"); 

?>

