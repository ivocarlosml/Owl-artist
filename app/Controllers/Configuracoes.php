<?php
namespace OwlArtist\Controllers;

use OwlArtist\Core\Controller;

class Configuracoes extends Controller{
    public function config(){
        $this->view('configuracoes');
    }
}