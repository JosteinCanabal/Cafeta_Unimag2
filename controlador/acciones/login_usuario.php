<?php
    session_start();
    require_once("../../controlador/mdb/mdbusuario.php");
    if(isset($_POST['inicio'])){ 
		$username = $_POST['username'];
		$password = $_POST['password'];
               $usuario = autenticar_usuario($username, $password);
		if($usuario != null){ // Puede iniciar sesión
                    $_SESSION['id_usuario'] = $usuario->getid_usuario();
                    $_SESSION['username'] = $usuario->getusername();
                   header("Location: ../../vistas/index.php");
		}else{ // No puede iniciar sesión
                    $errMsg .= 'Username and Password are not found';
                    header("Location: ../../vistas/index.php");
		}
	}
        
        