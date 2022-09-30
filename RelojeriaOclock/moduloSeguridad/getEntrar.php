<?php

if (isset($_POST['btnEntrar'])){
	include_once("facadeSeguridad.php");
	$entrar = new facadeSeguridad;
	$entrar -> Facade_entrar();
}
else
{
	include_once("../shared/formMensajeSistema.php");
	$nuevoMensaje = new formMensajeSistema;
	$nuevoMensaje -> formMensajeSistemaShow("Acceso denegado","<a href = '../index.php'> ir al inicio</a>");
}
?>