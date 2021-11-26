<?php require_once('header.view.php'); ?>
<hr />
<br />
    <?php
    if (!empty($_GET['isbn'])) {
        var_dump($_GET);
    foreach ($articulos as $articulo) {
    ?>
<center>
    <h2><?=$articulo['titulo']?></h2>
</center>
<table width="100%">
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
        <td><?= Funcion::GET_img("carrito.php", 'nuevo', $articulo['isbn'], 'images/Agregar_al_carrito.png', NULL) ?></td>
        <td><?= Funcion::GET_img("libros_cat.php", 'cat', $articulo['id_categoria'], 'images/volver_home.jpg', NULL) ?></td>
    </tr>
</table>
<?php
    }else {
        ?>
        <center>
            <h2>No existe este producto</h2>
        </center>
        <?php
    }
?>

<?php require_once('footer.view.php'); ?>