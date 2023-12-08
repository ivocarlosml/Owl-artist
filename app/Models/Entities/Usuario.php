<?php

namespace OwlArtist\Models\Entities;
use OwlArtist\Core\Entity;

class Usuario extends Entity{

    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $senha;
    protected ?string $biografia;
    protected ?string $foto;
    protected ?int $selo;


    public function setSenha($valor)
    {
        $this->senha= password_hash($valor,PASSWORD_DEFAULT);
    }
    
    public function autentica(string $senha)
    {
        if(password_verify($senha,$this->senha))
        {
            $_SESSION['__usuario'] = $this->id;
            $_SESSION['__logado'] = true;

            return true;
        }

        return false;
    }


    public static function getRegras() :array
    {
        return [
            'nome' => 'obrigatorio|maiorque:4',
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio',
            'telefone' => 'obrigatorio|maiorque:5',
            'termosdeuso' => 'obrigatorio'
        ];
    }

    public static function getLoginRegras() :array
    {
        return [
            'login' => 'obrigatorio',
            'senha' => 'obrigatorio'
        ];
    }



}