<?php

use OwlArtist\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/cadastro','LoginController','criarConta');
Router::add('/configuracoes','Configuracoes','config');

