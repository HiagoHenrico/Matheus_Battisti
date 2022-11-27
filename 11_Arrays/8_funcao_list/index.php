<?php

/* Criando muitas variáveis

- Podemos criar muitas variáveis com base em um array;
- Para isso vamos ultilizar a função list;
- Exemplo: list($nome, $idade, $profissao) = $pessoa;
*/

$pessoa = ["Matheus", 29, "Programador", "verde"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo $nome . "<br>";
echo $idade . "<br>";
echo $profissao . "<br>";
echo $corDosOlhos . "<br>";
