<?php require_once('header.view.php'); ?>
<hr />
<br />
<center>
	<h2>Registrate para acceder a la tienda</h2>
</center>

<br>
<div class="contenedor">
	<form action="registro.php" method="post">
		<p>
			<label>Nombre de usuario:</label><input type="text" name="usuario" placeholder="Nombre de usuario">
		</p>
		<p>
			<label>Contraseña de usuario:</label><input type="password" name="pass" placeholder="Contraseña del usuario">
		</p>
		<p>
			<input type="submit" class="caja" value="registrar">
		</p>
		<p><a href="Login.php">¿Ya tines cuenta?</a></p>
	</form>

	<?=$mensaje?>

</div>
<?php require_once('footer.view.php');
