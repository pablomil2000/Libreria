<?php
include_once("class/Funciones.php");
include_once("class/Libro.php");
include_once("class/Carrito.php");
session_start();
    $validacion = new Funcion;
    $carrito = new Carrito();
    $libro = new Libro();

    /*   CREAR CARRITO   */
        if(isset($_GET["nuevo"])){
            $isbn = $validacion->sanar_datos($_GET["nuevo"],"int",$errores,"isbn");
            if($isbn > 0):
                if(!isset($_SESSION["carrito"])):
                    $_SESSION["carrito"][$isbn]=1;
                else:
                    if(!isset($_SESSION["carrito"][$isbn])):
                        $_SESSION["carrito"][$isbn]=1;
                    else:
                        $_SESSION["carrito"][$isbn]++;
                    endif;
                endif;
            endif;
            header("location:carrito.php");
        }
    /*   ACTUALIZAR CARRITO   */
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $isbn = $validacion->sanar_datos($_POST["isbn"],"string",$errores,'isbn');
            $cant = $validacion->sanar_datos($_POST["cantidad"],"int",$errores,"cantidad");
            if($cant<=0){
                $cant=1;
            }
            
            $_SESSION["carrito"][$isbn]=$cant;
            header("location:carrito.php");
        }
    /*   ELIMINAR CARRITO   */
        if(isset($_GET["del"])){
            $isbn = $validacion->sanar_datos($_GET["del"],"int",$errores,"isbn");
            if($isbn > 0):
                if(isset($_SESSION["carrito"][$isbn])):
                    unset($_SESSION["carrito"][$isbn]);
                endif;
            endif;
            header("location:carrito.php");
        }
    /*   SACAR PRODUCTOS DEL CARRITO   */
    $ids = $carrito->devolver_ids_carrito();
    if($ids == null) $ids = "(0)";
    $libros = $libro->GetLibros_isbn($ids);
    $carrito->sacar_precio($libros);
    $carrito->sacar_cantidad();
require_once('views/carrito.view.php');