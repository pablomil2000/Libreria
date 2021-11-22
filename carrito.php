<?php
    session_start();
    include_once('class/Carrito.php');
    include_once('class/Libro.php');
    include_once('class/Funciones.php');

    $carrito = new Carrito();
    $libro = new Libro();
    if (isset($_GET['isbn'])) {
        $carro = $carrito->addProducto($_GET['isbn']);
    }elseif (isset($_GET['del'])) {
        $carro = $carrito->delProducto($_GET['del']);
    }
    else {
        $carro = $carrito->sacarCarro();
    }
    
    $_SESSION['carrito'] = $carro;


    require_once('views/carrito.view.php');