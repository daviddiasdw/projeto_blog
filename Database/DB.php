<?php

class DB
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');
    }

    public function getConnection()
    {
        return $this->conexao;
    }


};