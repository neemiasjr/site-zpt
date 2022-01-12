<h3>Lista de produtos</h3>
<hr>


<section id="paginacao" class="row">
  <center>
    PAGINAS
  </center>
</section>


<!--  começa lista de produtos  ---->
<section id="produtos" class="row">

  <ul style="list-style: none">



    <div class="row" id="pularliha">
      {foreach from=$PRO item=P}
        
        <!-- mostrando apenas os produtos ativos -->
        
          
          <li class="col-md-4">

            <div class="thumbnail">

            {if ($P.pro_ativo == 1) } 
              <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

                <img src="{$P.pro_img}" width="200" height="200" alt="">

                <div class="caption">

                  <h4 class="text-center"> {$P.pro_nome}</h4>

                  <h3 class="text-center text-danger">{$P.pro_valor}</h3>
                
                </div>
              
              </a>
            {else}
              <div class="imagem-disabled">
                <img src="{$P.pro_img}" width="200" height="200" alt="">

                <div class="caption" >

                  <h4 class="text-center"> {$P.pro_nome}</h4>

                  <h3 class="text-center text-danger">{$P.pro_valor}</h3>
                
                </div>
              </div>
            {/if}

            </div>
          </li>

        

      {/foreach}

    </div>


  </ul>

</section>


<!--  paginação inferior   -->
<section id="paginacao" class="row">
  <center>
    PAGINAS
  </center>
</section>

<style>
div.imagem-disabled {
  opacity: 0.4;
}
</style>