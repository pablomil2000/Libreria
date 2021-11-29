<?php
session_start();

include_once('class/Funciones.php');
include_once('class/Usuario.php');

$mensaje='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $nUsuario = Funcion::sanar_datos($_POST['usuario'],'string',$error, 'usuario');
    
        $password = $_POST['pass'];
        $usuario = new Usuario();
        
        if ($usuario->getUsuario($nUsuario)) {
            $conexion = Conexion::conectar();
            $sql = 'SELECT * FROM usuarios WHERE nombre LIKE :nombre AND pass LIKE :pass';
    
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':nombre',$nUsuario);
            $sentencia->bindParam(':pass',$password);
    
            $sentencia->execute();
            $res = $sentencia->fetch();
            
    
            if ($res) {
                $mensaje = "Usuario Logeado con exito";
                $_SESSION['usuario'] = $nUsuario;
                $_SESSION['rol'] =$res['rol'];
                $_SESSION['id_usuario'] = $res['id'];
                
                if (!isset($_SESSION['carrito'])) {
                    header("location:index.php");
                }else {
                    header("location:carrito.php");
                }


            }else {
                $mensaje = "Revisa los datos del usuaio, no son correctos";
            }
        }else {
            $mensaje = "Este usuario no esta registrado";
        }
    
    }
    
}

require_once('views/login.view.php');