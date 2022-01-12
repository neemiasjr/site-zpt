<?php

class Produto extends Conexao
{
    private $pro_nome;
    private $pro_categoria;
    private $pro_ativo;
    private $pro_modelo;
    private $pro_ref;
    private $pro_valor;
    private $pro_estoque;
    private $pro_peso ;
    private $pro_altura;
    private $pro_largura;
    private $pro_comprimento ;
    private $pro_img;
    private $pro_desc;
    private $pro_slug ;
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        //Busca produtos de 1 categoria
        $query = "SELECT * 
              FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN
              {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " ORDER BY pro_id DESC";
        $this->executeSQL($query);
        
		$this->getLista();
       
    }

    public function getByID($id)
    {
        //query para buscar os produtos de uma categoria especifica.
        $query = "SELECT * FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " AND pro_id = :id";

        $params = array(':id'=>(int)$id);

        $this->executeSQL($query, $params);

        $this->getLista();
    }

    public function getByCateID($id)
    {
        //query para buscar os produtos de uma categoria especifica.

        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " AND pro_categoria = :id";

        $query .= $this->getPaginacaoLinks("pro_id", $_ENV['DB_PREFIX']."produtos WHERE pro_categoria=".(int)$id);



        $params = array(':id'=>(int)$id);

        $this->executeSQL($query, $params);

        $this->getLista();
    }

    public function getProdutosByNome($nome)
    {
        
          // monto a SQL
        $query = "SELECT * FROM {$_ENV['DB_PREFIX']}produtos p INNER JOIN {$_ENV['DB_PREFIX']}categorias c ON p.pro_categoria = c.cate_id";
        $query .= " WHERE pro_nome LIKE '%$nome%'";
        $query .= $this->getPaginacaoLinks("pro_id", $_ENV['DB_PREFIX']."produtos WHERE pro_nome LIKE '%$nome%'");


        
        // passando parametros
        $params = array(':nome'=>$nome);
        // executando a SQL
        $this->executeSQL($query, $params);
        // trazendo a listagem
        $this->getLista();
    }

    
    private function getLista(){
		$i = 1;
		while($lista = $this->listarDados()):
		$this->itens[$i] = array(
			 'pro_id' => $lista['pro_id'],
			 'pro_nome'  => $lista['pro_nome'] ,  
	         'pro_desc'  => $lista['pro_desc'] ,  
	         'pro_peso'  => $lista['pro_peso'] ,  
	         'pro_valor'   => $lista['pro_valor']  ,  
	         'pro_altura' => $lista['pro_altura'] ,  
	         'pro_largura' => $lista['pro_largura'] ,  
	         'pro_comprimento' => $lista['pro_comprimento'] ,  
	         'pro_img'     => Rota::ImageLink($lista['pro_img'], 180, 180),  
	         'pro_img_g'     => Rota::ImageLink($lista['pro_img'], 300, 300), 
	         'pro_img_p'     => Rota::ImageLink($lista['pro_img'], 70, 70), 
	         'pro_slug' => $lista['pro_slug'], 
	         'pro_ref' => $lista['pro_ref'], 
	         'cate_nome' => $lista['cate_nome'] ,
             'cate_id'   => $lista['cate_id'] ,
             'pro_modelo'   => $lista['pro_modelo'] ,
             'pro_estoque'   => $lista['pro_estoque'] ,
             'pro_ativo'   => $lista['pro_ativo'] ,
             'pro_img_arquivo'   => Rota::getSiteHome() .'/'. Rota::getImagePasta() . $lista['pro_img'],
             'pro_img_atual'     => $lista['pro_img']
			);

		$i++;
		endwhile;
	}


    public function carregar(
        $pro_nome,
        $pro_categoria,
        $pro_ativo,
        $pro_modelo,
        $pro_ref,
        $pro_valor,
        $pro_estoque,
        $pro_peso ,
        $pro_altura,
        $pro_largura,
        $pro_comprimento,
        $pro_img,
        $pro_desc,
        $pro_slug=null
    )
    {
        $this->setNome($pro_nome);
        $this->setCategoria($pro_categoria);
        $this->setAtivo($pro_ativo);
        $this->setModelo($pro_modelo);
        $this->setRef($pro_ref);
        $this->setValor($pro_valor);
        $this->setEstoque($pro_estoque);
        $this->setPeso($pro_peso);
        $this->setAltura($pro_altura);
        $this->setLargura($pro_largura);
        $this->setComprimento($pro_comprimento);
        $this->setImg($pro_img);
        $this->setDesc($pro_desc);
        $this->setSlug($pro_nome);
    }

    public function inserir()
    {
        $query = "INSERT INTO {$_ENV['DB_PREFIX']}produtos (pro_nome, pro_categoria, pro_ativo, pro_modelo, pro_ref," ;
        $query.= " pro_valor, pro_estoque, pro_peso , pro_altura, pro_largura, pro_comprimento ,pro_img, pro_desc, pro_slug)";
        $query.= " VALUES ";
        $query.= " ( :pro_nome, :pro_categoria, :pro_ativo, :pro_modelo, :pro_ref, :pro_valor, :pro_estoque, :pro_peso ,";
        $query.= " :pro_altura, :pro_largura, :pro_comprimento ,:pro_img, :pro_desc, :pro_slug)";
        
        $params = array(
        ':pro_nome'=> $this->getNome(),
        ':pro_categoria'=> $this->getCategoria(),
        ':pro_ativo'=> $this->getAtivo(),
        ':pro_modelo'=> $this->getModelo(),
        ':pro_ref'=> $this->getRef(),
        ':pro_valor'=> $this->getValor(),
        ':pro_estoque'=> $this->getEstoque(),
        ':pro_peso'=> $this->getPeso(),
        ':pro_altura'=> $this->getAltura() ,
        ':pro_largura'=> $this->getLargura(),
        ':pro_comprimento'=> $this->getComprimento(),
        ':pro_img'=> $this->getImg(),
        ':pro_desc'=> $this->getDesc(),
        ':pro_slug'=> $this->getSlug(),
                     
        );


        if ($this->ExecuteSQL($query, $params)):
               
                   return true; else:
                   
                   return false;
               
        endif;
    }

    public function alterar($id)
    {
        $query = " UPDATE {$_ENV['DB_PREFIX']}produtos SET pro_nome=:pro_nome, pro_categoria=:pro_categoria," ;
        $query.= " pro_ativo=:pro_ativo, pro_modelo=:pro_modelo, pro_ref=:pro_ref,";
        $query.= " pro_valor=:pro_valor, pro_estoque=:pro_estoque, pro_peso=:pro_peso , ";
        $query.= " pro_altura=:pro_altura, pro_largura=:pro_largura,";
        $query.= " pro_comprimento=:pro_comprimento ,pro_img=:pro_img, pro_desc=:pro_desc, pro_slug=:pro_slug";
        $query.= " WHERE pro_id = :pro_id";
       
        
        $params = array(
            ':pro_nome'=> $this->getNome(),
            ':pro_categoria'=> $this->getCategoria(),
            ':pro_ativo'=> $this->getAtivo(),
            ':pro_modelo'=> $this->getModelo(),
            ':pro_ref'=> $this->getRef(),
            ':pro_valor'=> $this->getValor(),
            ':pro_estoque'=> $this->getEstoque(),
            ':pro_peso'=> $this->getPeso(),
            ':pro_altura'=> $this->getAltura() ,
            ':pro_largura'=> $this->getLargura(),
            ':pro_comprimento'=> $this->getComprimento(),
            ':pro_img'=> $this->getImg(),
            ':pro_desc'=> $this->getDesc(),
            ':pro_slug'=> $this->getSlug(),
            ':pro_id'=> (int)$id,
        );
        
           
        
        // executo a SQL
        if ($this->ExecuteSQL($query, $params)):
               
                   return true; else:
                   
                   return false;
               
        endif;
    }

    public function deletar($id)
    {
        $query = "DELETE FROM {$_ENV['DB_PREFIX']}produtos WHERE pro_id = :id";
        $params = array(
            ':id' => (int)$id
            );

        if ($this->ExecuteSQL($query, $params)):
               
                   return true; else:
                   
                   return false;
               
        endif;
    }

    //Obtendo os valores das variáveis internas
    public function getNome()
    {
        return $this->pro_nome;
    }

    public function getCategoria()
    {
        return $this->pro_categoria;
    }

    public function getAtivo()
    {
        return $this->pro_ativo;
    }

    public function getModelo()
    {
        return $this->pro_modelo;
    }

    public function getRef()
    {
        return $this->pro_ref;
    }

    public function getValor()
    {
        return $this->pro_valor;
    }
    public function getEstoque()
    {
        return $this->pro_estoque;
    }

    public function getPeso()
    {
        return $this->pro_peso;
    }

    public function getAltura()
    {
        return $this->pro_altura;
    }

    public function getLargura()
    {
        return $this->pro_largura;
    }

    public function getComprimento()
    {
        return $this->pro_comprimento;
    }

    public function getImg()
    {
        return $this->pro_img;
    }

    public function getDesc()
    {
        return $this->pro_desc;
    }

    public function getSlug()
    {
        return $this->pro_slug;
    }


    //Setando valores das variáveis internas

    public function setNome($pro_nome)
    {
        $this->pro_nome = $pro_nome;
    }

    public function setCategoria($pro_categoria)
    {
        $this->pro_categoria = $pro_categoria;
    }

    public function setAtivo($pro_ativo)
    {
        $this->pro_ativo = $pro_ativo;
    }

    public function setModelo($pro_modelo)
    {
        $this->pro_modelo = $pro_modelo;
    }

    public function setRef($pro_ref)
    {
        $this->pro_ref = $pro_ref;
    }

    public function setValor($pro_valor)
    {
        //1.335,99 => 1.33599
        
        // procura a virgula e troca por ponto
        $pro_valor = str_replace('.', '', $pro_valor);
        $pro_valor = str_replace(',', '.', $pro_valor);
       
        $this->pro_valor = $pro_valor ;
        // echo $this->pro_valor;
    }
    
    public function setEstoque($pro_estoque)
    {
        $this->pro_estoque = $pro_estoque;
    }

    public function setPeso($pro_peso)
    {
      
       ///  1,600  => 1.600
        $this->pro_peso = str_replace(',', '.', $pro_peso);
    }

    public function setAltura($pro_altura)
    {
        $this->pro_altura = $pro_altura;
    }

    public function setLargura($pro_largura)
    {
        $this->pro_largura = $pro_largura;
    }

    public function setComprimento($pro_comprimento)
    {
        $this->pro_comprimento = $pro_comprimento;
    }

    public function setImg($pro_img)
    {
        $this->pro_img = $pro_img;
    }

    public function setDesc($pro_desc)
    {
        $this->pro_desc = $pro_desc;
    }

    public function setSlug($pro_slug)
    {
        $this->pro_slug = Sistema::GetSlug($pro_slug);
    }

}
