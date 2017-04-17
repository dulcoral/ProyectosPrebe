<?php 
require("./conex.php");  //O lo incluye o no funciona nada 
                         //con "include" le da lo mismo si lo incluye o no
     $user=$_POST['username'];
     $name=$_POST['nombre'];
     $apellP=$_POST['apell_P'];
     $apellM=$_POST['apell_M'];
     $pass=$_POST['clave'];
     $email=$_POST['email'];
     $edad=$_POST['edad'];
if (empty($user) || empty($pass) || empty($apellP) || empty($edad) || empty($email) || empty($name)) {
    echo "Te faltaron datos";
    echo "<a href='index.php'>Regresa al login</a>";
    }
    else{
    $sql="SELECT * FROM `usuarios` WHERE `usuario`='$user' AND `password`='$pass'";
    $query=mysqli_query($con,$sql); //QUERY es una consulta
    $existe = mysqli_num_rows($query);
     if ((!$query || $existe == 0)) {
    $insert="INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`,`nombre`,`apell_Pater`, `apell_Mater`, `edad`) VALUES (NULL, '$user', '$pass', '$email','$name','$apellP','$apellM','$edad')" ;
     $dbc = mysqli_query($con,$insert);

     header("Location:index.html");
 }
 else{
    echo "Usuario existente";
    header("Location:index.php");
 }
}
?>
