<?php
declare(strict_types = 1);

use OwlArtist\Core\Router;

require __DIR__ ."/vendor/autoload.php";
require __DIR__."/app/rotas.php";
require __DIR__."/app/config.php";

function css($arquivo)
{
    require URL_BASE."/public/css/{$arquivo}.css";
}
function componente($componente){
    require  PASTA_VIEW."componentes/{$componente}.view.php";
}
 $url = $_GET['url']??"";
 

Router::exec($url);


