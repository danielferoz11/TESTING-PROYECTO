<?php
	include_once("../modelo/fabricaModelos.php");
	class controlAutenticarUsuario
	{
		public function entrar()
		{
			$objEntrar = fabricaModelos::create('formValidarDni');
			$objEntrar ->  formValidarDniShow();
		}

		public function verificarDni($campoDni)
		{
			include_once("../modelo/entidadUsuario.php");
			$objUsuario = new entidadUsuario;
			$respuesta = $objUsuario -> verificarDni($campoDni);
			if($respuesta == 0 ){
			include_once("../shared/formMensajeSistema.php");
			$nuevoMensaje = new formMensajeSistema;
			$nuevoMensaje -> formMensajeSistemaShow("Dni no encontrado","<a href = '../index.php'> ir al inicio</a>");
			}
			else
			{
				$objEntrar = fabricaModelos::create('formResponderPregunta');
				$objEntrar ->  responderPreguntaSecretaShow();
			}
		}

		public function validarRespuesta($campoRespuesta)
		{
			include_once("../modelo/entidadUsuario.php");
			$objUsuario = new entidadUsuario;
			$respuesta = $objUsuario -> validarRespuesta($campoRespuesta);
			if ($respuesta == 0) {
				include_once("../shared/formMensajeSistema.php");
				$nuevoMensaje = new formMensajeSistema;
				$nuevoMensaje -> formMensajeSistemaShow("La respuesta no coincide","<a href = '../index.php'> Las respuestas no coinciden</a>");
			}
			else
			{
				include_once("../modelo/entidadUsuario.php");
				$objPassword = new entidadUsuario;
				$password = $objPassword -> obtenerPassword($campoRespuesta);
				
				$objEntrar = fabricaModelos::create('formNuevoPassword');
				$objEntrar ->  nuevoPasswordShow($password);
			}
		}

		public function reestablecerPassword($originalPassword,$dni)
		{
			$originalPassword = md5($originalPassword);
			include_once("../modelo/entidadUsuario.php");
			$objUsuario = new entidadUsuario;
			$password = $objUsuario -> reestablecerPassword($originalPassword,$dni);
			
			include_once("../shared/formMensajeSistema.php");
			$nuevoMensaje = new formMensajeSistema;
			$nuevoMensaje -> formMensajeSistemaShow("Se cambio exitosamente.","<a href = '../index.php'> ir al inicio</a>");
			
		}
	}
?>