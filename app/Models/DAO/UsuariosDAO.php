<?php

namespace OwlArtist\Models\DAO;

use OwlArtist\Core\DAO;
use OwlArtist\Core\Entity;
use OwlArtist\Core\Database;
use OwlArtist\Models\Entities\Usuario;


class UsuariosDAO extends DAO{

    protected static string $tabela = "usuario";
    protected static string $classe = Usuario::class;
    

}