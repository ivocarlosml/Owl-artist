<?php

use OwlArtist\Core\Router;

Router::get('/','HomeController','index');
Router::get('/login','LoginController','login');
Router::get('/criarconta','LoginController','criarconta');
Router::get('/cadastrarconta','LoginController','cadastrarconta');
Router::get('/configuracoes','Configuracoes','config');
Router::post('/autentica','LoginController','autentica');

/*
Router::add('/teste','HomeController', 'teste');
Router::add('/teste2','HomeController', 'teste2');
Router::add('/teste3','HomeController', 'teste3');
Router::add('/teste4','HomeController', 'teste4');
Router::add('/teste5','HomeController', 'teste5');
Router::add('/teste6','HomeController', 'teste6');
*/
