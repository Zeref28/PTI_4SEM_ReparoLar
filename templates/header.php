<?php

  include_once("config/url.php");
  include_once("config/process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icon-->
    <link rel="icon" href="./img/favicon.png" />

    <!--Stylesheet - Css-->
    <link rel="stylesheet" href="./css/home.css" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   

    <title>ReparoLar - Página Inicial</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="./img/logo_dark.png" alt="Logo dark" />
            </div>

            <ul class="listLinks">
                <li><a class="nav-link active" href="<?= $BASE_URL ?>index.php">Home</a></li>
                <li><a class="nav-link active" href="<?= $BASE_URL ?>create.php">Anuncie</a></li>
                <li><a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>mural.php">Consultar anúncios</a></li>
                <li><a class="nav-link active" href="<?= $BASE_URL ?>index.php#whatIsReparoLar" >Sobre Nós</a></li>
                <li><a class="nav-link active" href="<?= $BASE_URL ?>index.php#contact" >Contato</li>
            </ul>
        </nav>

        <div class="navbar nav-mobile">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        <img src="./img/logo_dark.png" alt="Logo dark" />
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ReparoLar - Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Anuncie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>mural.php">Consultar anúncios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>