<?php

class Conexao
{
    private $host;
    private $user;
    private $senha;
    private $database;
    private $prefix;
    private $consulta;
    static private $conn;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USER'];
        $this->senha = $_ENV['DB_PASS'];
        $this->database = $_ENV['DB_NAME'];
        $this->prefix = $_ENV['DB_PREFIX'];

        try {
          if(empty($this->conectar)){
            $this->conectar();
          }
        }catch(Exception $e){
          exit($e->getMessage().'<h2>Erro ao conectar com o banco de dados!!</h2>');
        }
    }

    private function conectar()
    {
        $options = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->conn = new PDO(
            "mysql:host={$this->host};dbname={$this->database}",
            $this->user,
            $this->senha,
            $options
        );
    }

    function executeSQL($query, array $params = NULL){
      $this->consulta = $this->conn->prepare($query);
      return $this->consulta->execute();
    }

    function listarDados(){
      return $this->consulta->fetch(PDO::FETCH_ASSOC);
    }

    function totalDados(){
      return $this->consulta->rowCount();
    }
}
