<?php

class Conexao
{
    private $host;
    private $user;
    private $senha;
    private $database;
    private $prefix;
    private $consulta;
    private static $conn;
    protected $obj, $itens=array();
    public $paginacao_links, $totalpags, $limite, $inicio;


    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USER'];
        $this->senha = $_ENV['DB_PASS'];
        $this->database = $_ENV['DB_NAME'];
        $this->prefix = $_ENV['DB_PREFIX'];

        try {
            if (empty($this->conectar)) {
                $this->__conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage().'<h2>Erro ao conectar com o banco de dados!!</h2>');
        }
    }

    private function __conectar()
    {
        $options = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        return self::$conn = new PDO(
            "mysql:host={$this->host};dbname={$this->database}",
            $this->user,
            $this->senha,
            $options
        );
    }

    public function executeSQL($query, array $params = null)
    {
        $this->consulta = self::$conn->prepare($query);
        return $this->consulta->execute();
    }

    public function listarDados()
    {
        return $this->consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function totalDados()
    {
        return $this->consulta->rowCount();
    }

    public function quantidadePorPagina(){
        if(!empty($this->totalDados())){
            return ceil($this->totalDados() / $_ENV['BD_LIMIT_POR_PAG']);
        }
	}

    function getItens(){
		return $this->itens;
	}

    function getPaginacaoLinks($campo, $tabela){
		$pag = new Paginacao();
		$pag->GetPaginacao($campo, $tabela);
		$this->paginacao_links = $pag->link;

		$this->totalpags = $pag->totalpags;
		$this->limite = $pag->limite;
		$this->inicio = $pag->inicio;

		$inicio = $pag->inicio;
		$limite = $pag->limite;

		if($this->totalpags > 0){
			return " limit {$inicio}, {$limite}";
		}else{
			return " ";
		}
		
	}
}
