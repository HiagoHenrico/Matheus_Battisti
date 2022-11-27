<?php

  /* Preenchimento de formulário
  
  - Podemos preencher o formulário com dados que vieram da requisição;
  - Isso acontece bastante em resultados de busca ou edições de registros;
  - Podemos fazer uma checagem de se o dado foi enviado e recebido para a página, e ultilizar o echo para exibir no atributo value do input;
  - Exemplo:
    <input type="text" value="<?php echo $nome; ?>">
  */

  $usuario = [
      'nome' => 'Hiago',
      'idade' => 17,
      'profissao' => 'Nenhuma'
    ];

    if($usuario){

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de formulário</title>
</head>
<body>
    
     <form action="">
         <div>
             <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
         </div>
         <div>
             <input type="text" name="idade" placeholder="Digite seu nome" value="<?= $idade ?>">
         </div>
         <div>
             <input type="text" name="profissao" placeholder="Digite seu nome" value="<?= $profissao ?>">
         </div>
         <div>
             <input type="submit" value="Enviar">
         </div>
     </form>
</body>
</html>