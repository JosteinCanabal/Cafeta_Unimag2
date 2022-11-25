<?php

require_once("../../controlador/mdb/mdbusuario.php");
require_once("../../modelo/entidad/usuario.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(isset($_POST['registro'])) {
            $usuario = new usuario( NUll,$nombre, $apellido,$username, $email, $password);
           registrar_usuario($usuario);
            header("Location: ../../index.php");
        }else{
            $usuario = new usuario( NULL,$nombre, $apellido,$username, $email, $password);
            $usuario = registrar_usuario($usuario);
            if($usuario)
                header("Location: ../../index.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../index.php?msg=No se pudo realizar el registro");
        }
?>