<?php
    session_start();
    include_once('class/Libro.php');
    include_once('class/Funciones.php');

    $libro = new Libro();
    
    if (isset($_GET['isbn']) && !empty($_GET['isbn'])) {
        $isbn = $_GET['isbn'];
        if (isset($_SESSION['carrito'][$isbn])) {
            
        }else {
            // $carrito =Array();
            $carrito[$isbn] = 1;
        }
        var_dump($carrito);
        $_SESSION['carrito'] = $carrito;
    }


    require_once('views/carrito.view.php');