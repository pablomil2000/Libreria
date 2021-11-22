<?php
class Conexion
{
    static public function conectar()
    {

        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "libreria";

        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $conexion = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        return $conexion;
    }
}
