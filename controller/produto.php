<h2>Esta é a página do produto</h2>
<?php

$smarty = new Template();
$produtos = new Produto();
$produtos->getProdutos();

$smarty->assign('LISTA_PRODUTOS', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rota::get_ProdutoInfo());

//var_dump($produtos->getItens());

$smarty->display('produto.tpl');

?>