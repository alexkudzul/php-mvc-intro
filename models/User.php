<?php
require_once 'Models/ModelBase.php';

class User extends ModelBase{
    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct()
    {
        parent::__construct();
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    } 
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    // Funciones adicionales, va a heredar desde modelbase.php
    // public function getAll(){
    //     return "Obteniendo todo los usuarios";
    // }
}


?>