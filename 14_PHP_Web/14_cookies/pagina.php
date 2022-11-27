<?php

  /* Cookies
  
  - Os cookies são strings que contém informações;
  - A função para adicionar um cookie é setcookie;
  - A função deve ser chamada antes do corpo da página, pois envia dados como header (cabeçalho);
  - O cookie leva dados como: nome, valor e data de expiração;
  - Podemos acessar os cookies de volta com $_COOKIE;
  */


  if(isset($_COOKIE['nome'])){

    $nome = $_COOKIE['nome'];
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

   <h1>página</h1>
   <?php if($nome != ""): ?>
    <p>Seja bem-vindo <?= $nome ?></p>
   <?php endif; ?>
    
</body>
</html>