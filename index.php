<?php

  require './vendor/autoload.php';

  //Configurando redis para 

  if($_ENV['REDIS_URL']) {
    $redisUrlParts = parse_url($_ENV['REDIS_URL']);
    ini_set('session.save_handler','redis');
    ini_set('session.save_path',"tcp://$redisUrlParts[host]:$redisUrlParts[port]?auth=$redisUrlParts[pass]");
  }

  //################Habilitando variaveis de ambiente .env ou do Sistema operacional########
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();
  $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);


  $smarty = new Template();
  $categorias = new Categorias();


  //dados de produto
  $produtos = new Produto();
  $produtos->getAll();

  $smarty->assign('PRO', $produtos->getItens());
  $smarty->assign('PRO_INFO', Rota::getProdutoInfo());
  $smarty->assign('PRO_TOTAL', $produtos->TotalDados());
  $smarty->assign('PRODUTOS', Rota::paginaProdutos());


  //dados do template index.tpl
  $smarty->assign('GET_TEMPLATE', Rota::getSiteTemplate());
  $smarty->assign('GET_HOME', Rota::getSiteHome());
  $smarty->assign('PAG_CARRINHO', Rota::getCarrinho());
  $smarty->assign('PAG_CONTATO', Rota::getContato());
  $smarty->assign('PAG_MINHACONTA', Rota::getMinhaConta());
  $smarty->assign('PAG_PRODUTOS', Rota::paginaProdutos());
  $smarty->assign('TITULO_SITE', Config::SITE_NOME);
  $smarty->assign('CATEGORIAS', $categorias->GetItens());

 
  $smarty->display('index.tpl');

