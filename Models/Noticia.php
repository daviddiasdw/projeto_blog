<?php

require_once '../Database/DB.php';

class Noticia
{
    private $tabela = 'noticia';
    private $conexao;

    public function __construct()
    {
        $db = new DB();
        $this->conexao = $db->getConnection();

    }

    public function store(array $data){
            $sql = "INSERT INTO " . $this->tabela . " (titulo, conteudo) VALUES (:titulo, :conteudo)";
            $prep = $this->conexao->prepare($sql);
//            echo $data['titulo'];
//            die();
            return $prep->execute($data);
    }

    public function index(){

        $sql = 'SELECT * FROM ' . $this->tabela;
        $prep = $this->conexao->prepare($sql);
        $prep->execute();
        $result = $prep->fetchAll(PDO::FETCH_OBJ);

        foreach ($result as $listar) {
            echo $listar->titulo;
            echo '<br>';
            echo $listar->conteudo;
            echo '<br>';
        }

    }
}