<?php

Class Rota{
  public static $pag;
  private static $pasta_controller;
  private static $pasta_view = 'view';


  static function get_SiteHome(){
    return $_ENV['SITE_URL'] . '/' . $_ENV['SITE_HOME'];
  }

  static function get_SiteRaiz(){
    return $_SERVER['DOCUMENT_ROOT'] . '/' . $_ENV['SITE_HOME'];
  }

  static function get_SiteTemplate(){
    return self::get_SiteHome() . self::$pasta_view;
  }

  static function get_Carrinho(){
    return self::get_SiteHome() . 'carrinho';
  }

  static function get_Contato(){
    return self::get_SiteHome() . 'contato';
  }

  static function get_MinhaConta(){
    return self::get_SiteHome() . 'minhaconta';
  }


  static function get_pagina(){
    if(!empty($_GET['pag'])){

      $pagina = $_GET['pag'];

      self::$pag = explode('/', $pagina);

      $pagina = 'controller/'.$_GET['pag'].'.php';
      if(file_exists($pagina)){
        return include $pagina;
      }
      return include 'error.php';
    }
  }
}

?>