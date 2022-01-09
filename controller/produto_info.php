<?php

$smarty = new Template();
$produtos = new Produto();
$produtos->getProdutosID(Rota::$pag[1]);

$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rota::getSiteTemplate());


//var_dump($produtos->getItens());

$smarty->display('produto_info.tpl');

?>

