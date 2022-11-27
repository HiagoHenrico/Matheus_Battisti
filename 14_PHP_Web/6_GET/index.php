<?php

/* Teste de formulários com GET

- Vamos precisar criar um formulário e definir o método como GET, e também o arquivo ou rota que vamos acessar em action;
- No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados para o servidor;
- Faremos o processo e retornamos algo para o usuário;
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="processamento.php" method="GET">
       <div>
           <input type="text" name="nome" placeholder="Preencha seu nome">
       </div>
       <div>
           <input type="text" name="idade" placeholder="Preencha sua idade">
       </div>
       <div>
           <input type="submit" value="Enviar">
       </div>
   </form>
    
</body>
</html>