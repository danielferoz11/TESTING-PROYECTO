<?php

//$botonSiguiente = $_POST['btnSiguiente'];

if (isset($_POST['btnSiguiente'])) {
	

	$campoRespuesta = $_POST['campoRespuesta'];

	if (strlen($campoRespuesta) < 1) {
		include_once("../shared/formMensajeSistema.php");
		$nuevoMensaje = new formMensajeSistema;
		$nuevoMensaje -> formMensajeSistemaShow("No valido","<a href = '../index.php'> ir al inicio</a>");
	}
	else{

		include_once("facadeSeguridad.php");
		$accesoPregunta = new facadeSeguridad;
		$accesoPregunta -> Facade_validarRespuesta($campoRespuesta);
	}
}
else{
	include_once("../shared/formMensajeSistema.php");
	$nuevoMensaje = new formMensajeSistema;
	$nuevoMensaje -> formMensajeSistemaShow("Acceso denegado","<a href = '../index.php'> ir al inicio</a>");
}
?>