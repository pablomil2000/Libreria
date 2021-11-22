<?php require_once('header.view.php'); ?>
<hr />
<br />
<center>
    <h2>Informática</h2>
</center>

<table width="100%">

    <?php
    // var_dump($articulos);
    if (!empty($articulos)) {

        foreach ($articulos as $articulo) {
        ?>
            <tr>
                <td width="100"><?=Funcion::GET_img('detalles_libro.php', 'isbn', $articulo['isbn'], $articulo['imagen'], NULL); ?></td>
                <td>
                    <h3><?=$articulo['titulo']?></h3>
                </td>
            </tr>
        <?php
        }
    }else {
		?>
        <h4>No hay Libros disponibles</h4><?php
	}
    ?>
</table>
<hr />
<?php require_once('footer.view.php'); ?>