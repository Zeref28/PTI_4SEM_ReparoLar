<?php
  include_once("templates/header.php");
?>
  <div class="blocoanuncio" id="view-contact-container"> 
    
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Categoria:</h1>
    <p><?= $anuncio["DS_CATEGORIA"] ?></p>
    <h1 id="main-title">Resumo do Serviço:</h1>
    <p><?= $anuncio["DS_SERVRESUM"] ?></p>
    <h1 id="main-title">Descrição do serviço completo:</h1>
    <p><?= $anuncio["DS_SERVCOMPL"] ?></p>
    <h1 id="main-title">Preço pretendido:</h1>
    <p>de R$<?= $anuncio["VL_PRECODE"] ?> até R$<?= $anuncio["VL_PRECOATE"] ?></p> 
    <h1 id="main-title">Nome do solicitante:</h1>
    <p><?= $anuncio["DS_NOME"] ?></p>
    <?php if(!EMPTY($anuncio["DS_EMAIL"])): ?>
      <h1 id="main-title">E-mail</h1>
      <a href="mailto:<?= $anuncio["DS_EMAIL"] ?>?Subject=Reparolar&Body=Olá%E1%2C%20vi%20seu%20anú%FAncio%20no%20site%20do%20Reparo%20Lar%20e%20queria%20saber%20mais%20detalhes%20do%20servi%E7ço.%0APodemos%20conversar%3F"><?= $anuncio["DS_EMAIL"] ?></a>
    <?php endif; ?>
    <?php if(!EMPTY($anuncio["DS_CELULAR"])): ?>
      <h1 id="main-title">Telefone para contato:</h1>
      <a href=<?= "tel://55" . preg_replace('/[^0-9]/', '',$anuncio["DS_CELULAR"])?>><?= $anuncio["DS_CELULAR"] ?></a>
    <?php endif; ?>
    <?php if(!EMPTY($anuncio["DS_WHATSAPP"])): ?>
      <h1 id="main-title">Whatsapp</h1>
      <a href="https://api.whatsapp.com/send?phone=55<?= preg_replace('/[^0-9]/', '',$anuncio["DS_WHATSAPP"])?>&text=Ol%C3%A1%2C%20vi%20seu%20an%C3%BAncio%20no%20site%20do%20Reparo%20Lar%20e%20queria%20saber%20mais%20detalhes%20do%20servi%C3%A7o.%20Podemos%20conversar%3F"><?=$anuncio["DS_WHATSAPP"]?></a>
    <?php endif; ?>

    </div>
<?php
  include_once("templates/footer.php");
?>
