<?php
	include_once("../moduloSeguridad/formNuevoPassword.php");
	include_once("../moduloSeguridad/formResponderPregunta.php");
	include_once("../moduloSeguridad/formValidarDni.php");
	class fabricaModelos
	{
		public static function create($tipo)
		{
			switch($tipo)
			{
				case 'formNuevoPassword': return new formNuevoPassword();
				case 'formResponderPregunta': return new formResponderPregunta();
                case 'formValidarDni': return new formValidarDni();
				case 'formAutenticarUsuario': return new formAutenticarUsuario();
				default: return new Exception("error no existe este modelo");	
			}	
		}	
		public function getTipo()
		{
			return get_class($this);	
		}	
	}
?>