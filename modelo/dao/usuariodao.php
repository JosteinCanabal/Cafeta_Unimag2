<?php
require_once("database2.php");
require_once("../../modelo/entidad/usuario.php");


class usuariodao {

    public function registrar_usuario(usuario $usuario){
        $database2 = new database2();
    
        $stmt1 = "INSERT INTO usuario VALUES (NULL,:nombre,:apellido,:username,:email,:password)"; 
    
        $resultado = $database2->ejecutarActualizacion($stmt1, array(
        ':nombre' => $usuario->getnombre(),
        ':apellido'=>$usuario->getapellido(),
        ':username'=>$usuario->getusername(),
        ':email' => $usuario->getemail(),
        ':password' => $usuario->getPassword(),
        )
        ); 

        return $resultado;
    }

    public function autenticar_usuario($username, $password){
        $database2 = new database2();
        
        $data_table= $database2->ejecutarConsulta("SELECT * FROM usuario WHERE username =:username AND 
        password = :password",array(':username'=>$username,':password'=>$password));

        if(count($data_table)==1){
            
            foreach($data_table as $indice => $valor){
                $usuario = new usuario(
                        $data_table[$indice]["id_usuario"],
                        $data_table[$indice]["nombre"],
                        $data_table[$indice]["apellido"],
                        $data_table[$indice]["username"],
                        $data_table[$indice]["email"],
                        $data_table[$indice]["password"],   
                        );
            }
            return $usuario;    
        }else{
            return null;
        }
    }    
}