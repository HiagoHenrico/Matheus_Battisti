<?php

/* Removendo elementos

- Podemos remover elementos de um array com  a função array_splice;
- Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover;
- Exemplo: array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento;
*/

// RESGATAR ELEMENTOS DE ARRAY
// REMOVER ELEMENTOS

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 2);

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";

$arr2 = [1, 2, 3, 4, 5, 6];

$removidos2 = array_splice($arr2, 3);

print_r($arr2);
echo "<br>";

print_r($removidos2);
echo "<br>";

$arr3 = [1, 2, 3, 4, 5, 6];

$removidos3 = array_splice($arr3, 1, -1);

print_r($arr3);
echo "<br>";

print_r($removidos3);
echo "<br>";