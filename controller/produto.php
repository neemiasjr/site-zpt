<?php
$txt_busca = "";
$smarty = new Template();
$produtos = new Produto();

if(!empty($_GET['txt_buscar'])){
	$txt_busca = $_GET['txt_buscar'];
}

$txt_busca = !empty($_POST['txt_buscar']) ? $_POST['txt_buscar'] : null;

if(!empty(Rota::$pag[1]) && empty($txt_busca)){
	$produtos->getByCateID(Rota::$pag[1]);

}elseif(!empty($txt_busca)){
	
				$nome = filter_var($txt_busca, FILTER_SANITIZE_STRING);
				$produtos->getProdutosByNome($nome);

}elseif(!empty($txt_busca) && !empty(Rota::$pag[1])){
	
				$nome = filter_var($txt_busca, FILTER_SANITIZE_STRING);
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