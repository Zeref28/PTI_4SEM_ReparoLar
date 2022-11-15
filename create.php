<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criar Anúncio</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Categoria:</label>
        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Digite a categoria" required>
      </div>
      <div class="form-group">
        <label for="name">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título" required>
      </div>
      <div class="form-group">
        <label for="observations">Resumo do serviço:</label>
        <textarea type="text" class="form-control" id="servResum" name="servResum" placeholder="Insira um resumo do serviço" rows="2" required></textarea>
      </div>
      <div class="form-group">
        <label for="observations">Detalhes do serviço:</label>
        <textarea type="text" class="form-control" id="servCompl" name="servCompl" placeholder="Insira detalhes do serviço" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="phone">Preço de:</label>
        <input type="number" class="form-control" id="precoDe" step="0.01" min="0" name="precoDe" placeholder="0.00">
      </div>
      <div class="form-group">
        <label for="phone">Preço até:</label>
        <input type="number" class="form-control" id="precoAte" step="0.01" min="0" name="precoAte" placeholder="0.00">
      </div>
      <br>
      <br>
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="name">Email para contato:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone para contato:</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite seu celular" required>
      </div>
      <div class="form-group">
        <label for="phone">Whatsapp para contato:</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Digite seu whatsapp" required>
      </div>
      <button type="submit" class="btn btn-primary">Criar anúncio</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
