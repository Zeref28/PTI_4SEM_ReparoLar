<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Anuncios</h1>
    <?php if(count($anuncios) > 0): ?>
      <table class="table" id="tabela-anuncios">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Serv.</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($anuncios as $anuncio): ?>
            <tr>
              <td scope="row" class="col-id"><?= $anuncio["PK_ID"] ?></td>
              <td scope="row"><?= $anuncio["DS_TITULO"] ?></td>
              <td scope="row"><?= $anuncio["DS_SERVRESUM"] ?></td>
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $anuncio["PK_ID"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $anuncio["PK_ID"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $anuncio["PK_ID"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Não existem anuncios disponiveis no momento, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
