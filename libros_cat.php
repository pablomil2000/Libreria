<?php
    session_start();
    if (!isset($_GET['cat'])) {
        header('location:index.php');
    }

    include_once('class/Libro.php');
    include_once('class/Funciones.php');

    $libro = new Libro();
    $articulos = $libro->GetLibros_cat($_GET['cat']);
    // var_dump($libros);

require_once('views/libros_cat.view.php');