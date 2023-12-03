<?php
declare(strict_types = 1);

use OwlArtist\Core\Router;

require __DIR__ ."/vendor/autoload.php";

const PASTA_VIEW = "./app/Views/";
const NS_CONTROLLERS = "\\OwlArtist\\controllers\\";

 $url = $_GET['url']??"";
 
Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/teste','LoginController','teste');
Router::add('/configuracoes','Configuracoes','config');


Router::exec($url);


