<?php

class Carrito
{

    public function sacarCarro()
    {
        if (isset($_SESSION['carrito'])) {
            $carrito = $_SESSION['carrito'];
        } else {
            $carrito = array();
        }
        return $carrito;
    }

    public function addProducto($isbn)
    {
        $cantidad = 1;
        if (isset($_SESSION['carrito'])) {
            if (isset($carrito[$isbn])) {
                $carrito = $_SESSION['carrito'];
                $cantidad = $carrito[$isbn];
            }
        }
        $carrito[$isbn] = $cantidad;

        return $carrito;
    }

    public function delProducto($isbn)
    {
        $cantidad = 1;
        if (isset($_SESSION['carrito'])) {
            if (isset($carrito[$isbn])) {
                $carrito = $_SESSION['carrito'];
                unset($carrito[$isbn]);
            }
        }
        $carrito[$isbn] = $cantidad;

        return $carrito;
    }
}
