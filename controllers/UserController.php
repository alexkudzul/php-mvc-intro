<?php

class UserController{

    public function index(){
        require_once 'models/User.php';

        $user = new User();

        $users = $user->getAll('users');

        require_once 'views/user/index.php';
    }
    public function create(){
        require_once 'views/user/create.php';

    }
    public function edit(){

    }
}


?>