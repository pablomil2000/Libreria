<?php

include_once('conexion.php');
class Funcion
{
    public static function GET_texto($pagina, $get, $valor, $texto)
    {
        $cadena = '';
        $cadena = '<a href="' . $pagina . '?' . $get . '=' . $valor . '">' . $texto . '</a>';
        return $cadena;
    }

    public static function GET_img($pagina, $get, $valor, $img, $tamaño)
    {
        $cadena = '';
        $cadena = '<a href="' . $pagina . '?' . $get . '=' . $valor . '"><img src="' . $img . '" ' . $tamaño . '></a>';
        return $cadena;
    }

    public function sanar_datos($campo, $tipo, &$errores, $nombre)
    {
        if (isset($campo) && !empty($campo)) {
            switch ($tipo) {
                case "string":
                    $campo = filter_var(stripslashes($campo), FILTER_SANITIZE_STRING);
                    return $campo;
                    break;
                case "email":
                    $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
                    if (filter_var($campo, FILTER_VALIDATE_EMAIL)) {
                        return $campo;
                    } else {
                        $errores .= "email invalido";
                    }
                    break;
                case "pass":
                    $campo = filter_var(stripslashes($campo), FILTER_SANITIZE_STRING);
                    $campo = hash('sha512', $campo);
                    return $campo;
                    break;
                case "int":
                    $campo = (int)$campo;
                    $campo = floor($campo);
                    if ($campo == "") {
                        $campo = 0;
                    }
                    return $campo;
                    break;
                case "foto":
                    $rand = rand();
                    if (!empty($_FILES["foto"])) {
                        if ($_FILES["foto"]["size"] > 0) {
                            $comprueba = @getimagesize($_FILES["foto"]["tmp_name"]);
                            if ($comprueba != false) {
                                $ruta = "img/" . $rand . "" . $_FILES["foto"]["name"];
                                move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
                                $campo = $_FILES["foto"]["name"];
                                $campo = $rand . "" . $campo;
                                return $campo;
                            } else {
                                $error = "El archivo no es una imagen";
                            }
                        } else {
                            $campo = "default.jpg";
                            return $campo;
                        }
                    } else {
                        $campo = "default.jpg";
                        return $campo;
                    }

                    break;
            }
        } else {
            $errores .= "Campo " . $nombre . " vacio<br>";
        }
    }

    public static function generar_id($tabla)
    {    //proximo id auto de $tabla
        $conexion = Conexion::conectar();

        $sql_id = "SELECT Auto_increment FROM information_schema.tables WHERE table_name=:tabla";
        $sentencia = $conexion->prepare($sql_id);
        $sentencia->BindParam(':tabla', $tabla);
        $sentencia->execute();

        $id = $sentencia->fetchAll();
        return $id[0]['Auto_increment'];
    }
}
