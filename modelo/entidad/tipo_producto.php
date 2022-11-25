<?php

class tipo_producto{
    public $id;
    public $categoria;

    public function __construct($id, $categoria){
        $this->id = $id;
        $this->categoria = $categoria;
    }

    //metodos get

    public function getid(){
        return $this->$id;
    }

    
    public function getcategoria(){
        return $this->$categoria;
    }

    //metodos set

    public function setcategoria($categoria){
        $this->categoria=$categoria;

        return $this;
    }

}