<?php
namespace OwlArtist\Controllers;
use OwlArtist\Models\Entities\Usuario;
use OwlArtist\Models\DAO\UsuariosDAO;

use OwlArtist\Core\Controller;

class LoginController extends Controller{
    public function login(){
        $this->view('login');
    }

    public function criarconta(){
        $this->view('criarConta');
    }

    public function cadastrarconta(){
        
        $usuario = new Usuario($this->post());
        $usuario->cargo = 1;

        $mensagem = "Usuario {$usuario->nome} foi cadastrado com sucesso!";

        var_dump(UsuariosDAO::inserir($usuario));
    }
}