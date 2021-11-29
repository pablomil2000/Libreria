<?php
session_start();
include_once('class/Carrito.php');

$carro = new Carrito();

if (isset($_SESSION["id_usuario"])) {
    $carrito = $_SESSION["id_usuario"];
}