<?php
require_once("database2.php");
require_once("../../modelo/entidad/producto.php");


class productodao {

    public function registrar_producto(producto $producto){
        $database2 = new database2();
    
        $stmt1 = "INSERT INTO producto VALUES (NULL,:nombre,:clase_producto,:id_producto)"; 
    
        $resultado = $database2->ejecutarActualizacion($stmt1, array(
        ':nombre' => $producto->getnombre(),
        ':clase_producto' => $producto->getclase_producto(),
        ':id_producto' => $producto->getid_producto(),
        )
        ); 

        return $resultado;
    }
}