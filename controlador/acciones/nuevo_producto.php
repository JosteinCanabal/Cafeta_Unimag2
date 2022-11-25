<?php

require_once("../../controlador/mdb/mdbproducto.php");
require_once("../../modelo/entidad/producto.php");

        $nombre = $_POST['nombre'];
        $clase_producto = $_POST['clase_producto'];
        $id_categoria=$_POST['id_categoria'];
       

        if(isset($_POST['registro'])) {
            $producto = new producto( NUll,$nombre, $clase_producto,$id_categoria);
           registrar_producto($producto);
            header("Location: ../../vistas/comidas.php");
        }else{
            $producto = new producto( NULL,$nombre, $clase_producto,$id_categoria);
            $producto = registrar_producto($producto);
            if($producto)
                header("Location: ../../vistas/comidas.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../vistas/comidas.php?msg=No se pudo realizar el registro");
        }
?>