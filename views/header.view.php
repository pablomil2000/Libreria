<?php
var_dump($_SESSION);
?>
<html>

<head>
    <title>Libreria Arboleda 1.0</title>
    <link href="css/estilos.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <table width=100%>
        <tr>
            <td rowspan="2">
                <a href="index.php"><img src="images/LibreriasOnline.jpg" alt="Librearias Online" border="0" align="left" valign="bottom" height="100" width="225" /></a>
            </td>

            <?php
            if (isset($_SESSION['rol'])) {
            ?>

                <td align="right" rowspan="2" width="200">
                    <p>Bienvenido <?= $_SESSION['usuario'] ?></p>
                    <center><p><a href="salir.php">Salir</a></p></center>

                </td>
            <?php
            } else {
            ?>
                <td align="right" valign="bottom">
                    <a href="login.php" class='caja'><b>Login</b></a>
                    <a href="registro.php" class='caja'><b>Registrate</b></a>
                </td><?php
                    }
                        ?>

            <td align="right" valign="bottom">
                <b>Nº de productos en el carrito: 0</b>
            </td>

            <td align="right" rowspan="2" width="135">
                <a href="carrito.php"><img src="images/CARRITO_DE_COMPRAS.gif" width="135" border="0" /> </a>
            </td>
        </tr>
        <tr>
            <td align="right" valign="top">
                <b>Total: 0 €</b>
            </td>
        </tr>
    </table>