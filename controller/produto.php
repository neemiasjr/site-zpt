<?php

$smarty = new Template();
1w-
$produtos = new Produto();


if(isset(Rota::$pag[1]) && !isset($_POST['txt_buscar'])){
	$produtos->getByCateID(Rota::$pag[1]);

}elseif(isset($_POST['txt_buscar'])){
	
				$nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
				$produtos->getProdutosByNome($nome);

}elseif(isset($_POST['txt_buscar']) && isset(Rota::$pag[1])){
	
				$nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
				$produtos->getProdutosByNome($nome);
	
}else{

	$produtos->getAll();
}




$smarty->assign('PRO', $produtos->getItens());
$smarty->assign('PRO_INFO', Rota::getProdutoInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PRODUTOS', Rota::paginaProdutos());


//var_dump($produtos->getItens());

$smarty->display('produto.tpl');

?>