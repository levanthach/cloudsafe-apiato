<?php

namespace App\Containers\Application\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class AdminLoginController extends WebController
{

    public function login(){
        return view('application::Admin.login');
    }

    public function register(){
        return view('application::Admin.register');
    }

    public function recover_password(){
        return view('application::Admin.recover_pass');
    }

}

