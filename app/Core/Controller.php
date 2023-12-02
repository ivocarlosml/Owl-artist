<?php
namespace OwlArtist\Core;
class Controller{
    protected function view(String $arquivo,array $dados=[]){
        require PASTA_VIEW."{$arquivo}.view.php";
    }
    
}