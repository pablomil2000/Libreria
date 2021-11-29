<?php
session_start();
include_once('class/Funciones.php');
include_once('class/Usuario.php');
$mensaje ='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nUsuario = Funcion::sanar_datos($_POST['usuario'],'string',$error, 'usuario');

    $password = $_POST['pass'];
    $usuario = new Usuario();
    
    if (!$usuario->getUsuario($nUsuario)) {
        $conexion = Conexion::conectar();
        $sql = 'INSERT INTO `usuarios`(`nombre`, `pass`, `rol`) VALUES (:nombre,:pass,"Usuario")';

        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':nombre',$nUsuario);
        $sentencia->bindParam(':pass',$password);

        $res = $sentencia->execute();

        if ($res) {
            $mensaje = "Usuario registrado con exito";
            header("location:login.php");
        }else {
            $mensaje = "Hay un error al registrar el usuario";
        }
    }else {
        $mensaje = "Este usuario ya esta registrado";
    }

}

require_once('views/registro.view.php');