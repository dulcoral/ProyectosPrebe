<?php
  $email=$_POST['email'];
  $nombre=$_POST['nombre'];
  $opinion=$_POST['coment'];
  $mensaje="Mensaje para sogreeen! contacto";
  $mensaje.= "\nNombre: ". $nombre;
  $mensaje.= "\nEmail: ".$email;
  $mensaje.= "\nMensaje: \n".$opinion;
  $destino= "dulcoral20@gmail.com";
  $asunto = "Opinion SoGreeen!".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $email");
?>
