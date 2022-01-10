<h2>Esta é a página do produto</h2>
<?php

$smarty = new Template();
$produtos = new Produto();
$produtos->getAll();

$smarty->assign('PRO', $produtos->getItens());
$smarty->assign('PRO_INFO', Rota::getProdutoInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PRODUTOS', Rota::paginaProdutos());


//var_dump($produtos->getItens());

$smarty->display('produto.tpl');

?>