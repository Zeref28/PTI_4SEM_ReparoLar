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
  <?php include_once("templates/header.php"); ?>
  <section id="main_services">
    <div class="container-fluid container-lg">
      <div class="row ">
        <div class="col-lg-8">
          <div class="mainServiceInfo">
            <h1>
              Precisando de reparos domésticos? <br />
              Anuncie!
            </h1>
            <p>
              O aplicativo de busca para serviços para casa traz benefícios para o cliente e seu contratado. Para o cliente que busca
              arrumar um problema com encanador, eletricista, pedreiro, marceneiro ou chaveiro ficou muito mais fácil encontrar, de
              forma simples, o profissional que tenha as habilidades necessárias.
            </p>
            <div class="d-grid gap-2 d-md-block">
              <a class="btn btn-primary" href="<?= $BASE_URL ?>create.php" role="button">Saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4  ">
          <img src="./img/main_services.png" class="mainServiceImg" alt="Principal serviço" />
        </div>
      </div>
    </div>
  </section>


  <section id="perfil_services">
    <div class="container">
      <h5 class="perfilServiceTitle">
        Utilize nossos serviços de acordo com seu perfil:
      </h5>

      <div class="row mt-4">
        <div class="col-md-6 mb-5 text-md-end text-center">
          <div class="perfilServiceCard">
            <span class="perfilServiceCardDescription">
              Está precisando de reparos domésticos? <br /> Detalhe a sua demanda, criando seu anúncio
            </span>

            <a href="<?= $BASE_URL ?>create.php" class="mx-auto">
              Clique Aqui
            </a>
          </div>
        </div>

        <div class="col-md-6 text-md-start text-center">
          <div class="perfilServiceCard">
            <span class="perfilServiceCardDescription">
              É prestador de serviços? <br /> Verifique aqui os serviços disponíveis de acordo com o seu
              perfil
            </span>

            <a href="<?= $BASE_URL ?>mural.php" class="mx-auto">
              Clique Aqui
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="whatIsReparoLar">
    <div class="container" id="descricaogeral">
      <div class="row">
        <div class="col-md-4" id="figura">
          <img src="./img/benefits.png" width="100%" alt="Benefícios" />
        </div>

        <div class="col-md-5 offset-md-1" id="textodesc">
          <h3 class="titleReparoLar text-center text-md-start mt-5 mt-md-0">O que é o ReparoLar?</h3>

          <p class="text-center text-md-start" id="descricaoservico">
            O ReparoLar surgiu da necessidade de unir pessoas que precisam de serviços de reparos domésticos
            como serviços <br /> de
            encanador, eletricista, pedreiro, marceneiro etc, com os profissionais qualificados a executar
            estes serviços<br /> de forma
            simples e direta, sem que haja intermediadores, e facilitando a localização das demandas por
            região.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row ">
        <div class="col">
          <h4 class="contactTitle">
            Tem dúvidas? Entre em contato conosco!
          </h4>

          <h3 class="contactEmail">
            duvidas.reparolar@reparolar.com.br
          </h3>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container-fluid container-lg ">
      <div class="row text-center text-md-start">
        <div class="col-md-3">
          <div class="footerInfoReparoLar">
            <img src="./img/logo_light.png" alt="Logo light" />
            <p>
              O aplicativo de busca para serviços para casa traz benefícios para o cliente e seu contratado.
            </p>
            <br />
            @Reparolar.com.br
          </div>
        </div>

        <div class="col-md-2 offset-lg-1 ">
          <div class="footerAboutUs">
            <strong>Sobre nós</strong>
            <ul>
              <li>Contato</li>
              <li>Informações</li>
              <li>Portifólio</li>
              <li>Empresa</li>
            </ul>
          </div>
        </div>

        <div class="col-md-3  ">
          <div class="footerContactUs">
            <strong>Contate-nos</strong>
            <ul>
              <li>reparolar@reparolar.com.br</li>
              <li>Tel: (11) 4221-2698</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="d-flex justify-content-right">
            <div class="footerSocialNetworks">
              <img src="./img/facebook_icon.png" alt="Facebook" />
              <img src="./img/instagram_icon.png" alt="Instagram" />
              <img src="./img/twitter_icon.png" alt="Twitter" />
              <img src="./img/linkedin_icon.png" alt="Linkedin" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr />

    <span class="footerCopyRight">
      Copyright ® 2022 PTI SENAC
    </span>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
</body>

</html>