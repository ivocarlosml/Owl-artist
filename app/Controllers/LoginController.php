<?php
namespace OwlArtist\Controllers;
use OwlArtist\Models\Entities\Usuario;
use OwlArtist\Models\DAO\UsuariosDAO;
use OwlArtist\Core\Validator;
use OwlArtist\Core\Controller;

class LoginController extends Controller{
    public function login(){
        $this->view('login',['pagina' => 'Página de Login']);
    }

    public function autentica()
    {
        $houveErro = Validator::execute(Usuario::getLoginRegras(),$this->post());
        if($houveErro){
            addFormData($this->post());
            flash(Validator::getListaErros(),'erro');
        }

        $usuario = UsuariosDAO::getBy("login = ?",$this->post('login'));

        if($usuario &&  $usuario->autentica($this->post('senha'))){
            redireciona('index');
        }else{
            addFormData($this->post());
            flash('Usuário ou Senha Incorreta','erro');
            redireciona('login');
        }





    }

    public function criarconta(){
        $this->view('criarConta');
    }

    public function cadastrarconta(){

        $houveErro = Validator::execute(Usuario::getRegras(),$this->post() );
        if($houveErro)
        {
            addFormData($this->post());
            flash(Validator::getListaErros(),'erro');
            redireciona('criarconta');

        }


        $usuario = new Usuario($this->post());
        $usuario->cargo = '1';

        
        if( UsuariosDAO::inserir($usuario)){
            #Sessions -> É um modo em que tornamos variáveis acessiveis dentro da aplicação em páginas e locais diferentes. Estas variaveis estarão disponiveis enquanto o navegador estiver aberto

            flash("Usuário {$usuario->nome} foi cadastrado com sucesso!!!");

            redireciona('login');
        }

    }
}