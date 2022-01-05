<?php 

  require './vendor/autoload.php';

  $smarty = new Template();

  $smarty->assing('NOME', 'NEEMIAS CHAGAS');

  $smarty->display('index.tpl')

?>