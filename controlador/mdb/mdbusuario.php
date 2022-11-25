<?php

require_once("../../modelo/dao/usuariodao.php");
        
function autenticar_usuario($username, $password){
        $dao=new usuariodao();
        $usuario = $dao->autenticar_usuario($username, $password);
        return $usuario;
}

function registrar_usuario(usuario $usuario){
    
        $dao=new usuariodao();
    
        $usuario = $dao->registrar_usuario($usuario);
    
        return $usuario;
    }