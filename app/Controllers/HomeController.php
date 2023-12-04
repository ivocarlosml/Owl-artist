<?php
namespace OwlArtist\Controllers;

use OwlArtist\Models\DAO\UsuariosDAO;
use OwlArtist\Core\Controller;
use OwlArtist\Core\Database;
use OwlArtist\Models\Entities\Usuario;

class HomeController extends Controller{
    public function index(){
        $this->view('index');
    }

    public function teste() {
        $usuario = new Usuario();
        $usuario->nome = "Mariana";
        $usuario->email = "mariana@ifba.edu.br";
        $usuario->senha = "3441";
        $usuario->biografia = "não queria estar aqui";
        $usuario->selo = 3;
        $DAO = new UsuariosDAO();
        $DAO->inserir($usuario);
    }
}