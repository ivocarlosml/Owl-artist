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
        $usuario->nome = "Astrogildo";
        $usuario->email = "astrogildo@ifba.edu.br";
        $usuario->senha = "123456";
        $usuario->biografia = "só fumo!";
        $usuario->fotoPerfil = "nenhuma foto de perfil";
        $usuario->selo = 1;



        UsuariosDAO::inserir( $usuario );
    }

    public function teste2(){
       
        $usuarios =  UsuariosDAO::getAll();

        foreach ($usuarios as $usuario){
            echo $usuario->nome;
            echo "<hr>";
        }
    }

    public function teste3(){
       
        $usuario =  UsuariosDAO::getById(38);
        echo"<pre>";
        var_dump($usuario);
    }

    public function teste4(){
       
        $usuario =  UsuariosDAO::getById(38);
        
        $usuario->nome = "Astrogildo da Silva";

        UsuariosDao::editar($usuario);
        echo "<pre>";
        var_dump($usuario);
    }
    public function teste5(){
       
        $usuario =  UsuariosDao::getById(38);
        
        if($usuario){
            UsuariosDao::excluir($usuario);
            echo("Usuário Excluído com Sucesso!");
        }else{
            echo"Usuário não existe";
        }
    }

    public function teste6() {
        $usuario = new Usuario([
            'nome' => 'Julia',
            'email' => 'julia@ifba.edu.br',
            'senha' => '1234',
            'biografia' => 'taylor swift',
            'fotoPerfil' => 'nenhuma foto de perfil',
            'selo' => 1
        ]);
        
        echo "<pre>";
        var_dump($usuario->getProps());
    }
}