<?php

class Carrito
{

<<<<<<< Updated upstream
=======
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
        if (isset($carrito) && isset($carrito[$isbn])) {
            //Existe y sumo
            $total = $carrito[$isbn];
            $total++;
        } else {
            //no existe y creo
            $total = 0;
        }
        $carrito[$isbn] = $total++;
        return $carrito;
    }

    public function delProducto($isbn)
    {
        if (isset($carrito) && isset($carrito[$isbn])) {
            if ($carrito[$isbn] >= 2) {
                $carrito[$isbn]--;
            } else {
                unset($carrito[$isbn]);
            }
            return $carrito;
        }
    }
>>>>>>> Stashed changes
}
