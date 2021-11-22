<?php require_once('header.view.php'); ?>
<hr />
<br />
<center>
    <h2>Ajax. Manual imprescindible</h2>
</center>
<table width="100%">
    <?php
    foreach ($articulos as $articulo) {
    ?>
        <tr>
            <td width="100"><img src="<?= $articulo['imagen'] ?>" border="0" /></td>
            <td>
                <ul>
                    <li><span>Autor: </span> <?= $articulo['autor'] ?></li>
                    <li><span>ISBN: </span> <?= $articulo['isbn'] ?></li>
                    <li><span>Precio:</span> <?= $articulo['precio'] ?> € </li>
                    <li><span>Descripcion:</span> <?= $articulo['descripcion'] ?> </li>
                </ul>
            </td>
        </tr>

    <?php
    }
    ?>
</table>
<hr />
<table align="center" width="35%">
    <tr>
        <td><?= Funcion::GET_img("carrito.php", 'isbn', $articulo['isbn'], 'images/Agregar_al_carrito.png', NULL) ?></td>
        <td><?= Funcion::GET_img("libros_cat.php", 'cat', $articulo['id_categoria'], 'images/volver_home.jpg', NULL) ?></td>
    </tr>
</table>

<?php require_once('footer.view.php'); ?>