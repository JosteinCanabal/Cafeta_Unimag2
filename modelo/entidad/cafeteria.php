<?php

class cafeteria{
    public $id;
    public $nombre;

    public function __construct($id, $nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }

    //metodo get

    public function getId(){
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    //metodo set

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}