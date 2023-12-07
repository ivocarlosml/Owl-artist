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

    public static function getRegras():array
    {
        return [
            'nome'=> 'obrigatorio|maiorque:3',
            'email'=> 'obrigatorio|email',
            'senha'=> 'obrigatorio|maiorque:5',
            'telefone'=> 'obrigatorio',
            'termosdeuso'=> 'obrigatorio'
        ];
    }
    

}