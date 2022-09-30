<?php
include 'controlAutenticarUsuario.php';
class facadeSeguridad
{
	public function Facade_entrar()
	{
		$entrar = new controlAutenticarUsuario;
		$entrar->entrar();
	}

	public function Facade_verificarDni($campoDni)
	{
		$verificarDni = new controlAutenticarUsuario;
		$verificarDni->verificarDni($campoDni);
	}

	public function Facade_validarRespuesta($campoRespuesta)
	{
		$validarRespuesta = new controlAutenticarUsuario;
		$validarRespuesta->validarRespuesta($campoRespuesta);
	}

	public function Facade_reestablecerPassword($originalPassword, $dni)
	{
		$reestablecerPassword = new controlAutenticarUsuario;
		$reestablecerPassword->reestablecerPassword($originalPassword, $dni);
	}
}
