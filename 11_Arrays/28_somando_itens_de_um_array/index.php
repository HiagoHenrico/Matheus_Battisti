<?php

/* Somando itens de um array 

- Para somar os itens de um array ultilizamos a função array_sum;
- Ela nos retorna a soma de todos elementos númericos do array que passamos como argumento;
*/

$arr = range(1, 10);

$soma = array_sum($arr);

print_r($arr);
echo "<br>";
echo "$soma <br>";