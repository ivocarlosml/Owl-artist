<?php
namespace OwlArtist\Controllers;

use OwlArtist\Core\Controller;

class LoginController extends Controller{
    public function login(){
        $this->view('login');
    }

    public function criarconta(){
        $this->view('criarConta');
    }

    public function cadastrarconta(){
            var_dump($_POST);
    }
}