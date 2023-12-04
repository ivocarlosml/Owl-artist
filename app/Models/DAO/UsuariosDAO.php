<?php

namespace OwlArtist\Models\DAO;

use OwlArtist\Core\Database;

class UsuariosDAO {

    public function inserir($usuario)
    {
        $db = new Database();
        $sql = "INSERT INTO usuario
                    (nome,email,senha,biografia,selo)
                    VALUES
                    (?,?,?,?,?)";


        var_dump($db->execute($sql,$usuario));
    }
}