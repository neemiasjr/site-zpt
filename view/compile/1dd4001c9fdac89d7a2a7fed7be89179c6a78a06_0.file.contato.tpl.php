<?php
/* Smarty version 3.1.40, created on 2022-01-08 01:17:44
  from '/Users/neemiasjr/git-desafios-empresas/desafio-zpt/site-zpt/view/contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61d8e6386069c2_17644740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dd4001c9fdac89d7a2a7fed7be89179c6a78a06' => 
    array (
      0 => '/Users/neemiasjr/git-desafios-empresas/desafio-zpt/site-zpt/view/contato.tpl',
      1 => 1641604661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d8e6386069c2_17644740 (Smarty_Internal_Template $_smarty_tpl) {
?><!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Contato</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputassunto">Assunto</label>  
          <div class="col-md-8">
          <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Envie sua pergunta.."></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div><?php }
}
