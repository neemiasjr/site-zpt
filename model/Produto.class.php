<?php

class Produto extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProdutos()
    {
        //Busca produtos de 1 categoria
        $query = "SELECT * 
              FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN
              {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id ";
        $query .= "ORDER BY pro_id DESC";
        if($this->executeSQL($query)){
            $this->getLista();
        };
       
    }

    public function getProdutosID($id)
    {
        if($id){
            //Busca produtos de 1 categoria
            $query = "SELECT * 
                    FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN
                        {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id ";
            $query .= "AND pro_id = {$id}";
            //this->conn->bindParam(':id', $id);
            if($this->executeSQL($query)){
                $this->getLista();
            }
        }
    }

    public function getLista()
    {
        $i = 1;
        while ($lista = $this->listarDados()) {
            $this->itens[$i] = array(
             'pro_id' => $lista['pro_id'],
             'pro_nome'  => $lista['pro_nome'] ,
             'pro_desc'  => $lista['pro_desc'] ,
             'pro_peso'  => $lista['pro_peso'] ,
             'pro_valor'   => $lista['pro_valor']  ,
             'pro_altura' => $lista['pro_altura'] ,
             'pro_largura' => $lista['pro_largura'] ,
             'pro_comprimento' => $lista['pro_comprimento'] ,
             'pro_img'  => $lista['pro_img'] ,
             'pro_img'     => Rota::ImageLink($lista['pro_img'], 180, 180) ,
             'pro_img_g'     => Rota::ImageLink($lista['pro_img'], 300, 300) ,
             'pro_img_p'     => Rota::ImageLink($lista['pro_img'], 70, 70) , 
             'pro_slug' => $lista['pro_slug'],
             'pro_ref' => $lista['pro_ref'],
             'cate_nome' => $lista['cate_nome'] ,
             'cate_id'   => $lista['cate_id']
            );
            $i++;
      }
    }
}
