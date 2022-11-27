<?php


/* Exercício 30C

- Crie um array de 10 a 20 com for;
- Faça um loop em cima do array criado dinamicamente;
- imprima apenas os números ímpares;

*/

$array = [];

for($i = 10; $i <= 20; $i++){
    array_push($array, $i);
}

print_r($array);

echo "<br>";

for($i = 0; $i < count($array); $i++){

    if($array[$i] % 2 != 0){
        echo "Números ímpar: $array[$i] <br>";

    }
}