<?php

Class Rota{
  public static $pag;
  private static $pasta_controller;
  private static $pasta_view = 'view';


  static function getSiteHome(){
    return $_ENV['SITE_URL'] . '/' . $_ENV['SITE_HOME'];
  }

  static function getSiteRaiz(){
    return $_SERVER['DOCUMENT_ROOT'] . '/' . $_ENV['SITE_HOME'];
  }

  static function getSiteTemplate(){
    return self::getSiteHome() . self::$pasta_view;
  }

  static function getCarrinho(){
    return self::getSiteHome() . 'carrinho';
  }

  static function getProduto(){
    return self::getSiteHome() . 'produto';
  }

  static function getProdutoInfo(){
    return self::getSiteHome() . 'produto_info';
  }

  static function getContato(){
    return self::getSiteHome() . 'contato';
  }

  static function getMinhaConta(){
    return self::getSiteHome() . 'minhaconta';
  }

  static function paginaProdutos(){
		return  self::getSiteHome(). 'produto';
	}

  static function getImagePasta(){
    return $_ENV['SITE_URL_BASE_IMG_PRODUTO'];
  }

  static function getImageURL(){
    return self::getSiteHome() .'/' .self::getImagePasta();
  }

  static function ImageLink($img, $largura, $altura){

    $image = self::getImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
    return $image;
  }


  static function get_pagina(){

    if(!empty($_GET['pag'])){

      $pagina = $_GET['pag'];

      self::$pag = explode('/', $pagina);

      $pagina = 'controller/' .self::$pag[0] . '.php';
      if(file_exists($pagina)){
        return include $pagina;
      }
      return include 'error.php';
    }
  }
}

?>