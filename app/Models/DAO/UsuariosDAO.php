<?php

namespace OwlArtist\Models\DAO;

use OwlArtist\Core\DAO;
use OwlArtist\Core\Database;
use OwlArtist\Models\Entities\Usuario;

class UsuariosDAO extends DAO{

    protected static string $tabela = "usuarios";
    protected static string $classe = Usuario::class;
        

    public static function inserir($usuario)
    {
        $db = new Database();
        $tabela = static::$tabela;
        $sql = "INSERT INTO {$tabela} 
        (nome, email, senha, biografia, fotoPerfil, selo) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $dados = [
            $usuario->nome,
            $usuario->email, 
            $usuario->senha, 
            $usuario->biografia,
            $usuario->fotoPerfil,
            $usuario->selo
        ];

        return $db->execute($sql,$dados);
    } 



    public static function editar($usuario)
    {
        $db = new Database;
        $tabela = static::$tabela;

        $sql = "UPDATE {$tabela} SET  
                nome = ?, email = ?, senha = ?, biografia = ?
                , fotoPerfil = ?, selo = ? WHERE id = ?";

        $dados = [
            $usuario->nome,
            $usuario->email,
            $usuario->senha,
            $usuario->biografia,
            $usuario->fotoPerfil,
            $usuario->selo,
            $usuario->id
        ];

        return $db->execute($sql,$dados);
    }






}