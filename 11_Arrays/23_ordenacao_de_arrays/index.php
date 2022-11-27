<?php

/* Ordenação de arrays

- Para ordenar em ordem crescente podemos ultilizar a função sort em um array;
- Para ordenar de forma inversa ultilizamos rsort;
*/


$arr = [2, 43, 55,999 ,66 ,77 ,8];

sort($arr);

print_r($arr);
echo "<br>";

$arr2 = [2, 43, 55,999 ,66 ,77 ,8];
rsort($arr);

print_r($arr);
echo "<br>";

// Também e possível usar em :

$nomes = ["Ohmar", "Marco", "Antônio", "Geraldo", "Bartolomew"];

sort($nomes);

print_r($nomes);
echo "<br>";