<?php

namespace OwlArtist\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct() {
        $servidor = DB['servidor']; 
        $banco = DB['banco'];
        $usuario = DB['usuario'];
        $senha =DB['senha'] ;

        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);
    }

    public function execute(string $sql, array $dados = []) {
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }

}