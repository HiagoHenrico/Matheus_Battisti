<?php

/* Unindo arrays

- Podemos unir arrays, a ação também é conhecida como merge;
- A função que vamos ultilizar é a array_merge;
- Que como argumento aceita um número indeterminado de arrays;
*/

$arr = [1, 2, 3];
$arr2 = [10, 20, 30];
$arr3 = ['Hiago', 77, 89];

$arrMerge = array_merge($arr, $arr2, $arr3);

print_r($arrMerge);
