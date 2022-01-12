<?php

$smarty = new Template();
$produtos = new Produto();

if(!empty($_GET['txt_buscar'])){
	$txt_busca = $_GET['txt_buscar'];
}

$txt_busca = !empty($_POST['txt_buscar']) ? $_POST['txt_buscar'] : null;


if(isset(Rota::$pag[1]) && !isset($_POST['txt_buscar'])){
	$produtos->getByID(Rota::$pag[1]);

}elseif(isset($_POST['txt_buscar'])){
	
				$nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
				$produtos->getProdutosByNome($nome);
        header("Location: ".Rota::getProduto()."?txt_buscar=".$_POST['txt_buscar']); 

}elseif(isset($_POST['txt_buscar']) && isset(Rota::$pag[1])){
	
				$nome = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
				$produtos->getProdutosByNome($nome);
				header("Location: ".Rota::getProduto()."?txt_buscar=".$_POST['txt_buscar']); 
}else{

	$produtos->getAll();
}




$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('TEMA', Rota::getSiteTemplate());


//var_dump($produtos->getItens());

$smarty->display('produto_info.tpl');

?>

