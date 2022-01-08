<?php

Class Produtos extends Conexao{
  function __construct(){
    parent::__construct();
  }

  function getProdutos(){
    //Busca produtos de 1 categoria
    $query = "SELECT * 
              FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN
              {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id ";
    $query .= "ORDER BY prod_id DESC";
  }

  function getLista(){
    $i = 1;
    while($list)

  }
}
?>