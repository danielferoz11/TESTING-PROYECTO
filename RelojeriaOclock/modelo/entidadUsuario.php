<?php
include_once("Conexion.php");
class entidadUsuario extends Conexion{
	
	public function verificarDni($campoDni)
	{
		$consulta = "SELECT *
					 FROM usuario
					 WHERE dni = '$campoDni'";
		$resultado = mysqli_query($this->getConexion(),$consulta);
		$this->cerrarConexion();
		$aciertos = mysqli_num_rows($resultado);
		if($aciertos == 1)
			return(1);
		else 
			return(0); 
	}
	public function validarRespuesta($campoRespuesta)
	{
		$consulta = "SELECT *
					 FROM usuario
					 WHERE secreto = '$campoRespuesta'";
		$resultado = mysqli_query($this->getConexion(),$consulta);
		$this->cerrarConexion();
		$aciertos = mysqli_num_rows($resultado);
		if($aciertos == 1)
			return(1);
		else 
			return(0);
	}
	public function obtenerPassword($campoRespuesta)
	{
		$consulta = "SELECT *
					 FROM usuario
					 WHERE secreto = '$campoRespuesta'";
		$resultado = mysqli_query($this->getConexion(),$consulta);
		$this->cerrarConexion();
		/*$aciertos = mysqli_num_rows($resultado);
		if($aciertos == 1)
			return(1);
		else 
			return(0);*/
		return $resultado -> fetch_all()[0]; 
	}
	public function reestablecerPassword($originalPassword,$dni)
	{
		$consulta = "UPDATE 
					 usuario
					 SET clave = '$originalPassword'
					 WHERE dni = '$dni'";	
					 
		$resultado = mysqli_query($this->getConexion(),$consulta);
		$this->cerrarConexion();
		/*$aciertos = mysqli_num_rows($resultado);
		if($aciertos == 1)
			return(1);
		else 
			return(0);*/
		//return $resultado -> fetch_all()[0]; 
	}
}
?>