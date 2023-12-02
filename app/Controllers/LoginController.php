<?php
namespace OwlArtist\Controllers;

use OwlArtist\Core\Controller;

class LoginController extends Controller{
    public function login(){
        $this->view('login');
    }
    public function criarConta(){
        $this->view('criarConta');
    }
}