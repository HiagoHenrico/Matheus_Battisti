<?php

/* Dividindo arrays

- Podemos dividir um array grande em diversos arrays de número de elementos iguais;
- Vamos ultilizar a função array_chunk;
- Passamos o array como argumento e também o número de elementos que cada array deve ter;
*/

$arr = [];

$arr = range(1, 20);

print_r(array_chunk($arr, 4));
echo "<br>";

$arrays = array_chunk($arr, 10);

print_r($arrays);
echo "<br>";

print_r($arrays[1]);
echo "<br>";
