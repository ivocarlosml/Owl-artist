<?php
namespace OwlArtist\Core;
class Router{
    protected static array $rotas = [];

    public static function get(String $rota, String $controller, String $acao){}

    public static function add(String $rota, String $controller, String $acao){
        //$rota = ltrim($rota,'/');
       
        static :: $rotas[$rota] = [$controller,$acao];
    }
    public static function exec(string $url){
        $url = "/".$url;
        $rotas = static::$rotas;
        if(array_key_exists($url,$rotas)){

            [$controller,$metodo] = $rotas[$url];
            static:: carregarController($controller,$metodo);
            
         }else{
            static::erro('404',404);
         }
        
        
    }
    protected static function carregarController($controller,$metodo){
        $controller = NS_CONTROLLERS.$controller;
        if(class_exists($controller)){
            $ctr = new $controller;
            if(method_exists($ctr,$metodo)){
                http_response_code(200);
                $ctr->$metodo();

            }else{
                static::erro('metodo',405);
            }
            
        }else{
            static::erro('controller',405);
        }
       
     }
     protected static function erro(String $tipo,int $codigo= 400){
        http_response_code($codigo);
        $controlador = NS_CONTROLLERS.'ErroController';
        $metodo ='erro';
        $ctr = new $controlador();
        $ctr->erro($tipo);

     }
    
}