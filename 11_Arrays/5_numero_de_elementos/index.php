<?php

/* Número de elementos

- Podemos obter o número de elementos de um array com a função count;
- Basta passar o array como argumento;
- Um inteiro será retornado; 
*/

$arr = [1, 2,3 ];

echo count($arr);
echo "<br>";

$arr2 = range(1, 10);

echo count($arr2) . "<br>";

$arr3 = ['nome' => 'Hiago', 'idade' => 17, 'profissao' => 'nenhuma'];


echo count($arr3) . "<br>";