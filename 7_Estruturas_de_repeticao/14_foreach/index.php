<?php

/* Foreach

- O foreach também é uma estrutura de repetição;
- Porém ela e orientada a um array, devemos ultilizar um para que a estrutura repita em todos os elementos do mesmo;
- Exemplo:
foreach($array as $item){
    código
}
*/

$array = ["Hiago", "Paulo", "Rosa", "Yasmin"];
$a = 4;

foreach($array as $array){
    echo "O nome do índice atual é: $array <br>";

    // Inserindo um if no foreach
    if($array == "Hiago"){
        echo "Olá $a <br>";
    }
}

?>