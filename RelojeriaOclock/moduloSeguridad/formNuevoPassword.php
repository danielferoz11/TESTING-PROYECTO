<?php
include_once('../shared/headSingleton.php');
include_once('../shared/footSingleton.php');

class formNuevoPassword
{
	public function nuevoPasswordShow($password)
	{
		headSingleton::getHead('Nuevo Password');
		?>
		
		
		
		<form method="post" action="getNuevoPassword.php">
			<div>
				<label>Nueva Contraseña</label>
				<input type="password" name="nuevoPassword"><br>
				<label>Repetir Nueva Contraseña</label>
				<input type="password" name="repetirNuevoPassword">
				<button name="btnAceptar" id="btnAceptar">Aceptar</button>
				<input type="hidden" name="repetirDni" value="<?php echo $password[5]; ?>">
				
			</div>
		</form>
	
		<?php
		footSingleton::getFoot('Poniendo Nueva Pass...');
	}
}
?>