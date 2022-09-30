<?php
include_once('../shared/headSingleton.php');
include_once('../shared/footSingleton.php');

class formValidarDni
{
	public function formValidarDniShow()
	{
		headSingleton::getHead('Validar DNI');
		?>
	
	
	<body>

		<form method="post" action="getDni.php">
			<div>
				<label>Ingrese su dni</label>
				<input type="text" name="campoDni" id="campoDni" pattern="[0-9]+" maxlength="8">
				<button name="btnSiguiente" id="btnSiguiente">Siguiente</button>
			</div>				
		</form>
	
<?php
	footSingleton::getFoot('Validando DNI...');
	}
}
?>

