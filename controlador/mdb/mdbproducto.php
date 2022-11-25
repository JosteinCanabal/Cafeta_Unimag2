<?php

require_once("../../modelo/dao/productodao.php");

function registrar_producto(producto $producto){
    
    $dao=new productodao();

    $producto = $dao->registrar_producto($producto);

    return $producto;
}