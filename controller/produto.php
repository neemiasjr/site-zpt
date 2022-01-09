<h2>Esta é a página do produto</h2>
<?php

$smarty = new Template();
$produtos = new Produto();
$produtos->getProdutos();

$smarty->assign('PRO', $produtos->getItens());
$smarty->assign('PRO_INFO', Rota::get_ProdutoInfo());
$smarty->assign('SITE_RAIZ', Rota::get_SiteRaiz());
$smarty->assign('SITE_IMG_PASTA', Rota::getImagePasta());


//var_dump($produtos->getItens());

$smarty->display('produto.tpl');

?>