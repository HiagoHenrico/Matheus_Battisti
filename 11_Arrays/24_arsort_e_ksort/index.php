<?php

/* Ordenação de arrays associativos 

- Para ordenar em ordem crescente pelo valor das chaves, podemos ultilizar a função arsort;
- Se quisermos ordenar o array pelas chaves, ultilizamos o valor ksort;
*/


$arr =[
    'Martha' => 23,
    'Pedro' =>12,
    'Antônio' =>4,
    'Bart' =>22
];

arsort($arr);

print_r($arr);
echo "<br>";

$arr2 =[
    'Martha' => 33,
    'Pedro' =>22,
    'Antônio' =>74,
    'Bart' =>10
];

arsort($arr2);
print_r($arr2);
echo "<br>";

ksort($arr2);
print_r($arr2);
echo "<br>";

ksort($arr2);
print_r($arr2);
echo "<br>";