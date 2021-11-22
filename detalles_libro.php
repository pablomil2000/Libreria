<?php
    session_start();
    if (!isset($_GET['isbn'])) {
        header('location:index.php');
    }

    include_once('class/Libro.php');
    include_once('class/Funciones.php');

    $libro = new Libro();
    $articulos = $libro->GetLibros_isbn($_GET['isbn']);

require_once('views/detalles_libro.view.php');