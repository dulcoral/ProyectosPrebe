<?php
	session_start(); 
	if( !isset($_SESSION['user'])){			//checamos si hay session
		header('Location: index.html');		//en caso de no haber, cambia de pagina
	}									//si hay alguna, continuamos con la pagina

?>
