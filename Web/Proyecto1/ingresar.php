<?php
require('conex.php'); //O lo incluye o no funciona nada 
                         //con "include" le da lo mismo si lo incluye o no
$usuario=$_POST['user'];
$pass=$_POST['pass'];
echo $usuario."<br>";
echo $pass."<br>";
if (empty($usuario) || empty($pass)) {
	echo "Te faltaron datos";
	echo "<a href='index.php'> Regresa al login</a>";

}else{
	$sql="SELECT * FROM `usuarios` WHERE `usuario`='$usuario' AND `password`='$pass'"; 
	$query=mysqli_query($con,$sql); //QUERY es una consulta
	$existe = mysqli_num_rows($query);
	//while ($row= mysqli_fetch_array($query)) {
	$row= mysqli_fetch_row($query);
	$id= $row[0];
	$clase=$row[8];//}
	if ((!$query || $existe > 0)) {
		session_start(); //PARA QUE SE CREE UNA SESIÓN ( DONDE SE ALMACENAN LOS DATOS DE LA COOKIE)
        
		//UNA VARIABLE DE SESIÓN ES UNA COOKIE QUE SE QUEDA ABIERTA HASTA QUE SE CERRE SESIÓN
		$_SESSION['id']=$id;
		$_SESSION['user']=$usuario; //crea una cookies
		$_SESSION['type']=$clase;
		$hora=time();
		$hora=date("d-m-Y(H:i:s)",$hora);
		$_SESSION['hora']=$hora;
		echo $hora;
		echo"<br>";
		echo"<br>";
		print_r($_SESSION);
		header("Location: escritorio.php");
	}
	else{
		header("Location:index.php");
	}
}

?>
