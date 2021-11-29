<?php

include_once('conexion.php');

class Usuario{

    Public function getUsuario($nombre) {
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM Usuarios WHERE nombre=:nombre";
        
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->execute();
        $result = $sentencia->fetch();

        return $result;
    }

}