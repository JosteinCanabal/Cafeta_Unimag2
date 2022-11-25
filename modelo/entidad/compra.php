<?php

class compra{
    public $id;
    public $total_compra;
    public $fecha_compra;
    public $turno;
    

    public function __construct($id,$total_compra,$fecha_compra,$turno){
        $this->id=$id;
        $this->total_compra=$total_compra;
        $this->fecha_compra=$fecha_compra;
        $this->turno=$turno;
    }

    //metodos get

    public function getid(){
        return $this->id;
    }

    public function gettotal_compra(){
        return $this->total_compra;
    }

    public function getfecha_compra(){
        return $this->fecha_compra;
    }

    public function getturno(){
        return $this->turno;
    }

    //metodo set

    public function settotal_compra($total_compra){
        $this->total_compra=$total_compra;

        return $this;
    }

    public function setfecha_compra($fecha_compra){
        $this->fecha_compra=$fecha_compra;

        return $this;
    }

    public function setturno($turno){
        $this->turno=$turno;

        return $this;
    }

}