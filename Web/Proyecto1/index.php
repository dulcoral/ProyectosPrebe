<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['user'])){
    // Le doy la bienvenida al usuario.
    header("Location: escritorio.php");

  }
  else{
    // Si no está logueado lo redireccion a la página de login.
    header("Location: registro.html");
  }
?>