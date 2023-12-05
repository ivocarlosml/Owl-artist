<?php
namespace OwlArtist\Core;
abstract class Controller{

    protected array $postVars = [];
    protected array $getVars = [];

    public function __construct() {
        $this->postVars = $_POST ?? [];
        $this->getVars = $_GET ?? [];
    }

    protected function view(String $arquivo,array $dados=[]){
        require PASTA_VIEW."{$arquivo}.view.php";
    }

    protected function post(string $nome = null) {
        if(is_null($nome)) {
            return $this->postVars;
        }

        if(key_exists($nome,$this->postVars)) {
            return $this->postVars[$nome];
        }
        return null;
    }

    protected function get(string $nome = null) {
        if(is_null($nome)) {
            return $this->getVars;
        }

        if(key_exists($nome,$this->getVars)) {
            return $this->getVars[$nome];
        }
        return null;
    }

    public function input(string $nome = null) {
        if(is_null($nome)) {
            return null;
        }
        $inputs = array_merge($this->postVars,$this->getVars);
        if(key_exists($nome,$inputs)) {
            return $inputs["nome"];
        }
    }

    public function all() {
        $inputs = array_merge($this->postVars,$this->getVars);
        return $inputs;
    }
    
}