<?php

class producto{
    public $id;
    public $nombre;
    public $clase_producto;
    public $id_producto;

    public function __construct($id, $nombre,$clase_producto,$id_producto){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->clase_producto=$clase_producto;
        $this->id_producto=$id_producto;
    }

    //metodos get

    public function getid(){
        return $this->id;
    }

    
    public function getnombre(){
        return $this->nombre;
    }

    
    public function getclase_producto(){
        return $this->clase_producto;
    }

    public function getid_producto(){
        return $this->id_producto;
    }

    //metodos set

    public function setnombre($nombre){
        $this->nombre=$nombre;

        return $this;
    }

    public function setclase_producto($clase_producto){
        $this->clase_producto=$clase_producto;

        return $this;
    }

    public function setid_producto($id_producto){
        $this->id_producto=$id_producto;

        return $this;
    }


}