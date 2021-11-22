<?php

    include_once('conexion.php');

    Class Categoria{

        Public function getCategorias() {
            $conexion = conexion::conectar();

            $result = $conexion->query("SELECT * FROM categorias");

            if ($result) {
                return $result->fetchall();
            }else {
                return false;
            }
        }

    }