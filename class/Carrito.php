<?php

class Carrito{
    
    public function devolver_ids_carrito()
    {
        if(isset($_SESSION["carrito"]) && count($_SESSION["carrito"])>0)
        {
            $valores = "(";
            foreach($_SESSION["carrito"] as $keys => $value)
            {$valores .= $keys.",";}
            $valores = substr($valores, 0, -1);
            $valores .= ")";
            return $valores;
        }
    }
    public function sacar_precio($productos){
        $total = 0;
        foreach($productos as $producto)
        {
            $total += $producto["precio"]*$_SESSION["carrito"][$producto["isbn"]];
        }
        $_SESSION["total"]=$total;
    }
    public function sacar_cantidad(){
        $_SESSION["cant"]=array_sum($_SESSION["carrito"]);
    }
}