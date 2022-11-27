<?php

/* Criando variáveis com extract

- Com  a função extract podemos criar variáveis rapidamente de arrays associativos;
- O nome da chave será o nome da variável;
- Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita;s
*/

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângulo',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Hiago";

$pessoa = [
    'nome' => 'João',
    'idade' => 24
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";