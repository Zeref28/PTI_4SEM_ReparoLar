<?php
  include_once("templates/header.php");
?>

<?php
    if (isset($_GET['categ'])){
      $categoria = $_GET['categ'];
     }
?>

   <div class="container">
        <div class="paginatitulo">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
              <p id="msg"><?= $printMsg ?></p>
               <?php endif; ?>
        
                  
                <texto1>Anúncios disponíveis:</texto1>
                <menu1>
                  Escolha por categoria: 
                </menu1>
              
                <menu2>
                <form action="mural.php" method="GET" >
                    <select name="categ" onchange="this.form.submit()">
                      <option value="">Selecione a categoria</option>
                      <option value="Todos">Todos os anúncios</option>
                      <option value="Pedreiro">Pedreiro</option>
                      <option value="Eletricista">Eletricista</option>
                      <option value="Encanador">Encanador</option>
                      <option value="Chaveiro">Chaveiro</option>
                      <option value="Marceneiro">Marceneiro</option>
                      <option value="Pintor">Pintor</option>
                    </select>
                  </form>  
                 
                </menu2>
                
        </div>
        <div class="mural">
          <?php if(count($anuncios) > 0): ?>         
            <?php foreach($anuncios as $anuncio): ?>
              <div class="blocomural">
                <div> 
                  <p> Categoria: <b><?= $anuncio["DS_CATEGORIA"] ?> </b></p>
                </div>
                <div>     
                  <h1> <?= $anuncio["DS_TITULO"] ?> </h1>
                </div>
                <div>
                  <p> <?= $anuncio["DS_SERVRESUM"] ?> </p>
                </div>
                <div>
                <a href="<?= $BASE_URL ?>show.php?id=<?= $anuncio["PK_ID"] ?>">Ver anúncio completo</a>
                </div>
              </div>    
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
   </div>

<?php
  include_once("templates/footer.php");
?>