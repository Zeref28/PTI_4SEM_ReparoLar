<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {
    // Criar contato
    if($data["type"] === "create") {

      $categoria  = $data["categoria"];
      $titulo     = $data["titulo"];
      $servResum  = $data["servResum"];
      $servCompl  = $data["servCompl"];
      $nome       = $data["nome"];
      $email      = $data["email"];
      $celular    = $data["celular"];
      $whatsapp   = $data["whatsapp"];
      $precoDe    = $data["precoDe"];
      $precoAte   = $data["precoAte"];
      $cep        = 0;
      $finalizado = 0;
      $cancelado  = 0;

      $query = "INSERT INTO 
                  AN_ANUNCIO(
                    DS_CATEGORIA
                    ,DS_TITULO
                    ,DS_SERVRESUM
                    ,DS_SERVCOMPL
                    ,DS_NOME
                    ,DS_EMAIL
                    ,DS_CELULAR
                    ,DS_WHATSAPP
                    ,VL_PRECODE
                    ,VL_PRECOATE
                    ,NR_CEP
                    ,TG_FINALIZADO
                    ,TG_CANCELADO
                  ) 
                  VALUES (
                    :categoria
                    ,:titulo
                    ,:servicoResumido
                    ,:servicoCompleto
                    ,:nome
                    ,:email
                    ,:celular
                    ,:whatsapp
                    ,:precoDe
                    ,:precoAte
                    ,:cep
                    ,:finalizado
                    ,:cancelado
                  )";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":categoria", $categoria);
      $stmt->bindParam(":titulo", $titulo);
      $stmt->bindParam(":servicoResumido", $servResum);
      $stmt->bindParam(":servicoCompleto", $servCompl);
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":celular", $celular);
      $stmt->bindParam(":whatsapp", $whatsapp);
      $stmt->bindParam(":precoDe", $precoDe);
      $stmt->bindParam(":precoAte", $precoAte);
      $stmt->bindParam(":cep", $cep);
      $stmt->bindParam(":finalizado", $finalizado);
      $stmt->bindParam(":cancelado", $cancelado);

      try {
        $stmt->execute();
        $_SESSION["msg"] = "Anúncio criado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "edit") {

      $categoria  = $data["categoria"];
      $titulo     = $data["titulo"];
      $servResum  = $data["servResum"];
      $servCompl  = $data["servCompl"];
      $nome       = $data["nome"];
      $email      = $data["email"];
      $celular    = $data["celular"];
      $whatsapp   = $data["whatsapp"];
      $precoDe    = $data["precoDe"];
      $precoAte   = $data["precoAte"];
      $cep        = 0;
      $finalizado = 0;
      $cancelado  = 0;
      $id = $data["id"];

      $query = "UPDATE 
                  AN_ANUNCIO
                SET 
                    DS_CATEGORIA  = :categoria
                   ,DS_TITULO     = :titulo
                   ,DS_SERVRESUM  = :servicoResumido
                   ,DS_SERVCOMPL  = :servicoCompleto
                   ,DS_NOME       = :nome
                   ,DS_EMAIL      = :email
                   ,DS_CELULAR    = :celular
                   ,DS_WHATSAPP   = :whatsapp
                   ,VL_PRECODE    = :precoDe
                   ,VL_PRECATE    = :precoAte
                   ,NR_CEP        = :cep
                   ,TG_FINALIZADO = :finalizado
                   ,TG_CANCELADO  = :cancelado
                WHERE 
                    PK_ID = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":categoria", $categoria);
      $stmt->bindParam(":titulo", $titulo);
      $stmt->bindParam(":servicoResumido", $servResum);
      $stmt->bindParam(":servicoCompleto", $servCompl);
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":celular", $celular);
      $stmt->bindParam(":whatsapp", $whatsapp);
      $stmt->bindParam(":precoDe", $precoDe);
      $stmt->bindParam(":precoAte", $precoAte);
      $stmt->bindParam(":cep", $cep);
      $stmt->bindParam(":finalizado", $finalizado);
      $stmt->bindParam(":cancelado", $cancelado);
      $stmt->bindParam(":id", $id);

      try {
        $stmt->execute();
        $_SESSION["msg"] = "Anúncio atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM AN_ANUNCIO WHERE PK_ID = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {
        echo "Criando anuncio";
        $stmt->execute();
        $_SESSION["msg"] = "Anúncio removido com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM AN_ANUNCIO WHERE PK_ID = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $anuncio = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $anuncios = [];

      $query = "SELECT * FROM AN_ANUNCIO ORDER BY PK_ID DESC";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $anuncios = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;