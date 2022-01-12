<?php
/* Smarty version 3.1.43, created on 2022-01-12 02:59:40
  from '/Users/neemiasjr/git-desafios-empresas/desafio-zpt/site-zpt/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_61de441c6dee64_78701140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce820f158f663a0ad95c9a0c34ff67574326169c' => 
    array (
      0 => '/Users/neemiasjr/git-desafios-empresas/desafio-zpt/site-zpt/view/index.tpl',
      1 => 1641955701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61de441c6dee64_78701140 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>

<head>
  <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" type="text/css" />
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/contatos/contatos.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../lib/js/index.js" type="text/javascript"><?php echo '</script'; ?>
>

  <!-- meu aquivo pessoal de CSS-->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css" />


  <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
  <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
  <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

  <!-- começa  o container geral -->
  <div class="container-fluid">

    <!-- começa a div topo -->
    <div class="row" id="topo">


      <div class="container">
        <div class="col-md-5">
          <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/imagens/logoc.png" alt="">
        </div>
        <div class="col-md-7">
          <h3>Bem vindo a Loja ZPT!</h3>
          <h5>Melhores produtos e melhores preços do mercado!</h5>

        </div>
        <!--fim topo direito -->
      </div>


    </div><!-- fim da div topo -->

    <!-- começa a barra MENU-->
    <div class="row" id="barra-menu">

      <!--começa navBAR-->
      <nav class="navbar navbar-inverse">

        <!-- container navBAr-->
        <div class="container">
          <!-- header da navbar-->
          <div class="navbar-header">
            <!-- botao que mostra e esconde a navbar-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
          <!--fim header navbar-->

          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
"><i class="glyphicon glyphicon-user"></i> Minha Conta </a> </li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="glyphicon glyphicon-envelope"></i> Contato </a> </li>
              <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"
                  data-toggle="dropdown"><i class="glyphicon glyphicon-shopping-cart"
                    data-feather="shopping-cart"></i><span
                    class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header d-flex">
                      <h4 class="notification-title mb-0 mr-auto">Meu Carrinho</h4>
                      <div class="badge badge-pill badge-light-primary">4 Items</div>
                    </div>
                  </li>
                  <li class="scrollable-container media-list">
                    <div class="media align-items-center"><img class="d-block rounded mr-1" src="#" alt="donuts"
                        width="62">
                      <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                        <div class="media-heading">
                          <h6 class="cart-item-title"><a class="text-body" href="#"> Apple watch 5</a></h6><small
                            class="cart-item-by">By Apple</small>
                        </div>
                        <div class="cart-item-qty">
                          <div class="input-group">
                            <input class="touchspin-cart" type="number" value="1">
                          </div>
                        </div>
                        <h5 class="cart-item-price">$374.90</h5>
                      </div>
                    </div>
                    <div class="media align-items-center"><img class="d-block rounded mr-1" src="#" alt="donuts"
                        width="62">
                      <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                        <div class="media-heading">
                          <h6 class="cart-item-title"><a class="text-body" href="#"> Google Home Mini</a></h6><small
                            class="cart-item-by">By Google</small>
                        </div>
                        <div class="cart-item-qty">
                          <div class="input-group">
                            <input class="touchspin-cart" type="number" value="3">
                          </div>
                        </div>
                        <h5 class="cart-item-price">$129.40</h5>
                      </div>
                    </div>
                    <div class="media align-items-center"><img class="d-block rounded mr-1" src="#" alt="donuts"
                        width="62">
                      <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                        <div class="media-heading">
                          <h6 class="cart-item-title"><a class="text-body" href="#"> iPhone 11 Pro</a></h6><small
                            class="cart-item-by">By Apple</small>
                        </div>
                        <div class="cart-item-qty">
                          <div class="input-group">
                            <input class="touchspin-cart" type="number" value="2">
                          </div>
                        </div>
                        <h5 class="cart-item-price">$699.00</h5>
                      </div>
                    </div>
                    <div class="media align-items-center"><img class="d-block rounded mr-1" src="#" alt="donuts"
                        width="62">
                      <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                        <div class="media-heading">
                          <h6 class="cart-item-title"><a class="text-body" href="#"> iMac Pro</a></h6><small
                            class="cart-item-by">By Apple</small>
                        </div>
                        <div class="cart-item-qty">
                          <div class="input-group">
                            <input class="touchspin-cart" type="number" value="1">
                          </div>
                        </div>
                        <h5 class="cart-item-price">$4,999.00</h5>
                      </div>
                    </div>
                    <div class="media align-items-center"><img class="d-block rounded mr-1" alt="donuts" width="62">
                      <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                        <div class="media-heading">
                          <h6 class="cart-item-title"><a class="text-body" href="#"> MacBook Pro</a></h6><small
                            class="cart-item-by">By Apple</small>
                        </div>
                        <div class="cart-item-qty">
                          <div class="input-group">
                            <input class="touchspin-cart" type="number" value="1">
                          </div>
                        </div>
                        <h5 class="cart-item-price">$2,999.00</h5>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown-menu-footer">
                    <div class="d-flex justify-content-between mb-1">
                      <h6 class="font-weight-bolder mb-0">Total:</h6>
                      <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                    </div><a class="btn btn-primary btn-block" href="#">Checkout</a>
                  </li>
                </ul>
              </li>
            </ul>



            <form class="navbar-form navbar-right" role="search" method="POST" id="formBuscarProduto">
              <div class="form-group">
                <input type="text" name="txt_buscar" class="form-control txt_buscar" placeholder="Digite para buscar" required>
              </div>
              <button type="submit" class="btn btn-primary">Buscar</button>
            </form>

          </div><!-- fim navbar collapse-->


        </div>
        <!--fim container navBar-->

      </nav><!-- fim da navBar-->





    </div> <!-- fim barra menu-->

    <!-- começa DIV conteudo-->
    <div class="row" id="conteudo">

      <div class="container">

        <!-- coluna da esquerda -->
        <div class="col-md-2" id="lateral">

          <div class="list-group">
            <span class="list-group-item active"> Categorias</span>

            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>
              Todos</a>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>
                <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





          </div>
          <!--fim da list group-->
          <!--fim da list group-->
        </div>
        <!-- finm coluna esquerda -->

        <!-- coluna direita CONYEUDO CENTRAL -->
        <div class="col-md-10">


          <ul class="breadcrumb">
            <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
            <li><a href="#"> Produtos </a></li>
            <li><a href="#"> Info </a></li>
          </ul>
          <!-- fim do menu breadcrumb-->

          <?php 
          Rota::get_Pagina();
          ?>


        </div>
        <!--fim coluna direita-->



      </div>






    </div><!-- fim DIV conteudo-->

    <!-- começa div rodape -->
    <div class="row" id="rodape">
      <center>
        <h4><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h4>
        <P>Todos os direitos reservados - Souza Tech Sistemas de TI</p>
      </center>

    </div><!-- fim div rodape-->



  </div> <!-- fim do container geral -->

</body>

</html><?php }
}
