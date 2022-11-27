<?php

/* Retornando múltiplos valores 

- Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno;
- E então acessar os índices de formna isolada com a nova variável que contem o retorno;
  function teste(){
      return ["a", 10, true];
  }
*/

function alteraDados($nome, $idade){

  $nome = "Sr. $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}

$dados = alteraDados("Martha", 34);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";


?>