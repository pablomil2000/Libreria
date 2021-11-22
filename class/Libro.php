<?php
    include_once('conexion.php');
    class Libro{
        
        Public function GetLibros_cat($cat) {
            $conexion = Conexion::conectar();

            $sql = "SELECT * FROM libros WHERE id_categoria = :cat";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':cat',$cat);
            $sentencia->execute();

            if ($sentencia) {
                return $sentencia->fetchall();
            }else {
                return false;
            }
        }
        
        Public function GetLibros_isbn($isbn) {
            $conexion = Conexion::conectar();

            $sql = "SELECT * FROM libros WHERE isbn = :isbn";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':isbn',$isbn);
            $sentencia->execute();

            if ($sentencia) {
                return $sentencia->fetchall();
            }else {
                return false;
            }
        }
    }