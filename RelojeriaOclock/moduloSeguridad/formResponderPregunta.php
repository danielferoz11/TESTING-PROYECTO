<?php
include_once('../shared/headSingleton.php');
include_once('../shared/footSingleton.php');

class formResponderPregunta
{
	public function responderPreguntaSecretaShow()
	{
		headSingleton::getHead('Pregunta Secreta');
		?>
		
		
		<form method="post" action="getRespuesta.php">
			<div>
				<label>¿Cual es tu respuesta secreta?</label><br>
				<input type="text" name="campoRespuesta"><br>
				<button name="btnSiguiente" id="btnSiguiente">Siguiente</button>
			</div>
		</form>
		
		
		<?php
		footSingleton::getFoot('Respondiendo Pregunta...');
	}
}
?>