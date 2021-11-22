<?php session_start(); ?>
<?php
include_once('class/funciones.php');
include_once('class/Categorias.php');


$categoria = new Categoria();
$categorias = $categoria->getCategorias();


require_once('views/index.view.php');