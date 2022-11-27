<?php

/* Exercicio 28
- Crie um loop que vai até o número 30;
- O contador deve iniciar com 4;
- Faça incrementos de 2 em 2 no contador;
- Ultilize o break para parar o loop quando chegar no número 24;
 
*/

$num = 4;

while($num <= 30){

    echo "$num <br>";

    if($num === 24){
        echo "Fim do loop <br>";
        break;
    }

    $num += 2;

}