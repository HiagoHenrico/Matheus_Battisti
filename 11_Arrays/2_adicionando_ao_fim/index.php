<?php

/* Adicionando valor ao fim do array 

- Podemos adicionar valor ao fim de um array ultilizando a atribuição sem determinar um índice;
- Então o valor atribuido será enviado para o último e novo índice do array;
- Exemplo:
  $arr[] = 5;
*/

// Adicionando
$arr = [1, 2, 3];

$arr[] = 4;

print_r($arr);
echo "<br>";

$arr[] = 5;

print_r($arr);
echo "<br>";


$arr2 = [];

$arr2[] = 1;

print_r($arr2);
echo "<br>";

$arr3 = [];

$arr3['teste'] = 'testando';

print_r($arr3);
echo "<br>";