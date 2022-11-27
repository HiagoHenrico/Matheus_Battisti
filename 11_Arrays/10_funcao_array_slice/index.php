<?php

/* Resgatando elementos de array

- Com a função array_slice podemos resgatar uma faixa de elementos de um array;
- Passamos 3 parâmetros: o array, índice inicial e quantos elementos queremos resgatar a partir do índice;
*/

$arr = [];

$arr = range(0, 18, 2);

$slice1 = array_slice($arr, 1, 3);

print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr, 4, 4);

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4);

print_r($slice3);
echo "<br>";

$slice4 = array_slice($arr, 4, -3);

print_r($slice4);
echo "<br>";