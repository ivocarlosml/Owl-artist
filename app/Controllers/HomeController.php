<?php
namespace OwlArtist\Controllers;

use OwlArtist\Core\Controller;

class HomeController extends Controller{
    public function index(){
        $this->view('index');
    }
}