<?php


/* Exercício 30 B

- Crie um array 1 a 10;
- ultilize um loop for para criar este array;
- Dica: você pode ultilizar o método array_push(array, elemento) para inserir um elemento em um array;
- imprima o array criado com print_r;
*/

$array = [];

for($i = 1; $i <= 10; $i++){

    array_push($array, $i);

    print_r($array);
}