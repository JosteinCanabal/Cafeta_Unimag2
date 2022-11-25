<?php

class producto{
    public $id_proveedor;
    public $nombre;
    public $telefono;

    public function __construct($id_proveedor, $nombre,$telefono){
        $this->id_proveedor = $id_proveedor;
        $this->nombre = $nombre;
        $this->telefono=$telefono;
    }

    //metodos get

    public function getid_proveedor(){
        return $this->$id_proveedor;
    }

    
    public function getnombre(){
        return $this->$nombre;
    }

    public function gettelefono(){
        return $this->$telefono;
    }

    //metodo set

    public function setnombre($nombre){
        $this->nombre=$nombre;

        return $this;
    }

    public function settelefono($telefono){
        $this->telefono=$telefono;

        return $this;
    }

}