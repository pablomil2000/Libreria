<?php require_once('header.view.php') ?>
<hr />
<br />
<center>
	<h1>Tu carro de la compra:</h1>
</center>
<br /><br />
<table border="0" width="100%" cellspacing="0">
	<tr>
		<th colspan="2">Libro</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Total</th>
		<th>Eliminar</th>
		<th>Actualizar</th>
	</tr>
	
		<?php
		$total =0;
		$cantidad_libros = 0;
		if (!isset($_SESSION["carrito"])) {
			echo "<td colspan='7' style='text-align:center'><h1>No hay productos en el carrito</h1></td>";
			$aviso = 1;
		} else {
			foreach ($_SESSION["carrito"] as $isbn => $cantidad) {
				$libros = $libro->GetLibros_isbn($isbn);
				$total += $cantidad * $libros[0]['precio'];
				$cantidad_libros +=$cantidad;
		?>
			<form method="post">
				<tr>
					<td align="left">
						<img src="<?= $libros[0]['imagen'] ?>" border="0" height="75" width="55" />
					</td>
					<td align="left"><?= $libros[0]['titulo'] ?></td>
					<td align="center"><?= $libros[0]['precio'] ?> € </td>
					<td align="center">
						<input type="text" name="cantidad" size="2" value="<?= $cantidad ?>" />
					</td>
					<td align="center"><?= $cantidad * $libros[0]['precio'] ?> € </td>
					<td align="center">
						<a href="carrito.php?del=<?= $isbn ?>"><img src="images/trash.gif" width="25" height="35" border="0" /></a>
					</td>
					<td align="center">
						<input type="hidden" name="isbn" value='<?= $isbn ?>'>
						<input type="image" name="image" src="images/actualizar.gif" width="25" height="25" />
					</td>
				</tr>
				</form>
		<?php
			}
		}
		?>

	
	<tr>
		<th colspan="3" align="right">Totales:</th>
		<th align="center"><?=$cantidad_libros?></th>
		<th align="center"><?=$total?> €</th>
		<th></th>
		<th></th>
	</tr>
</table>
<br /><br />
<table align="center" width="40%">
	<tr>
		<td>
			<a href="index.php"><img align="left" src="images/seguir_comprando.png" border="0" title="Continuar Comprando" /></a>
		</td>
		<td>
			<?php if (!isset($aviso)){
				echo'<img align="rigth" src="images/hacer_pedido.jpg" border="0" title="Hacer el Pedido" />';
			}?>
		</td>
	</tr>
</table>
</body>

</html>