<?php


/* Exercício 29
- Crie um array com valores inteiros de 10 a 100, com incremento de 10;
- Aplique um loop neste array;
- Quando entrar os valores 30 ou 40, pule para a próxima execução;
*/

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$i = 0;

while($i < count($array)){
    
    $numAtual = $array[$i];

    if($numAtual == 30 || $numAtual == 40){
        $i++;
        continue;
    }

    echo "Loop em:" . " " . $numAtual . "<br>";

    $i++;;

}