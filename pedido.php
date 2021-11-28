<?php
session_start();
include_once("class/Funciones.php");
include_once("class/Carrito.php");

if (!isset($_SESSION["carrito"])) {
    header("Location:carrito.php");
}
$tabla = "pedidos";
$tabla2 = 'detallespedido';

$importe = $_SESSION["importe"];

$conexion = Conexion::conectar();

$sql = 'INSERT INTO ' . $tabla . '(importe) VALUES (:importe)';
$sentencia = $conexion->prepare($sql);
$sentencia->bindParam(':importe', $importe);
$resultado = $sentencia->execute();

$sql3 = 'SELECT * FROM '.$tabla.' ORDER BY 1 DESC LIMIT 1';
$sentencia = $conexion->prepare($sql3);
$sentencia->execute();
$res = $sentencia->fetch();

$id_pedido=$res['id'];
$carrito = $_SESSION['carrito'];

foreach ($carrito as $key => $cantidad) {
    $sql2 = 'INSERT INTO ' . $tabla2 . ' VALUES(:id_pedido, :id_producto, :cantidad)';
    $sentencia2 = $conexion->prepare($sql2);
    $sentencia2->bindParam(':id_pedido', $id_pedido);
    $sentencia2->bindParam(':id_producto', $key);
    $sentencia2->bindParam(':cantidad', $cantidad);
    $resultado = $sentencia2->execute();
}

unset($_SESSION["carrito"]);

header('location:index.php');