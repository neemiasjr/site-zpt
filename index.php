<?php

  require './vendor/autoload.php';

  //################Habilitando variaveis de ambiente .env ou do Sistema operacional########
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();
  $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);


  $smarty = new Template();
  
  //echo Rota::get_SiteTemplate();

  $smarty->assign('GET_TEMPLATE', Rota::getSiteTemplate());
  $smarty->assign('GET_HOME', Rota::get_SiteHome());
  $smarty->assign('PAG_CARRINHO', Rota::get_Carrinho());
  $smarty->assign('PAG_CONTATO', Rota::get_Contato());
  $smarty->assign('PAG_MINHACONTA', Rota::get_MinhaConta());
  $smarty->assign('TITULO_SITE', Config::SITE_NOME);
 
  $smarty->display('index.tpl');
