<?php
namespace OwlArtist\Controllers;

use OwlArtist\Core\Controller;

class ErroController extends Controller{
    public function erro404(){
        $this->view('404');
    }
   
}