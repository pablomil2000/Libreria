<?php require_once('header.view.php'); ?>
<hr />
<br />
<center>
	<h2>Bienvenido a la Librería Online Arboleda</h2>
</center>
<h3>Por favor elige una categoria de libros:</h3>
<br>
<div class="contenedor">
	<?php

	if (!empty($categorias)) {
		foreach ($categorias as $categoria) {
	?>
			<div class="caja">
				<h4><?= Funcion::GET_texto('libros_cat.php', 'cat', $categoria['id_categoria'], $categoria['nom_categoria']); ?></h4>
			</div>
		<?php
		}
	} else {
		?>
		<div class="caja">
			<h4>No hay Categorias disponibles</h4>
		</div>
	<?php
	}
	?>
</div>
<?php require_once('footer.view.php');
