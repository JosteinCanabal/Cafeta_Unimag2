<?php

class usuario{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $username;
    public $email;
    public $password;

    public function __construct($id_usuario,$nombre,$apellido,$username,$email,$password){
        $this->id_usuario=$id_usuario;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
    }

    //metodos get

    public function getid_usuario(){
        return $this->id_usuario;
    }

    public function getnombre(){
        return $this->nombre;
    }

    public function getapellido(){
        return $this->apellido;
    }
    
    public function getusername(){
        return $this->username;
    }
    
    public function getemail(){
        return $this->email;
    }

    public function getpassword(){
        return $this->password;
    }
    
    //metodos set

    

    public function setnombre($nombre){
        $this->nombre=$nombre;

        return $this;
        
    }

    public function setapellido($apellido){
        $this->apellido=$apellido;
    
        return $this;
    }    

    public function setusername($username){
        $this->username=$username;

        return $this;
    }

    

    public function setemail($email){
        $this->email=$email;

        return $this;
    
    }
    public function setpassword($password){
        $this->password=$password;

        return $this;
    }

}