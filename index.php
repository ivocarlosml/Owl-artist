<?php
declare(strict_types = 1);

use OwlArtist\Controllers\Configuracoes;
use OwlArtist\Controllers\ErroController;
use OwlArtist\Controllers\HomeController;
use OwlArtist\Controllers\LoginController;

require __DIR__ ."/vendor/autoload.php";

const PASTA_VIEW = "./app/Views/";

 $url = $_GET['url']??"/";
 switch($url){
    case"/":
        $controller = new HomeController();
        $controller->index();
    break;
    case "login":
        $controller = new LoginController();
        $controller-> login();
    break;
    case "cadastro":
        $controller = new LoginController();
        $controller-> criarConta();
    break;
    case "configuracoes":
        $controller = new Configuracoes();
        $controller-> config();
    break;
    default: 
        $controllerError  = new ErroController();
        $controllerError->erro404();
 }
