<?php
//Inicio la sesi�n
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if (!isset($_SESSION["logged"])) {
	//si no existe, envio a la pagina de autentificacion
	header("Location: ../user_log.php");
	//ademas salgo de este script
	exit();
} 
?>
