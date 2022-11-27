<?php


/* Loop dentro de loop
- Como nas estruturas de if, podemos adicionar um loop dentro de outro;
- O contador deve ser unico, para que um loop não afete outro;
- O loop interno será executado tantas vezes quando o loop externo for;
- E em cada uma das suas execuções, serão passadas todas as suas etapas;
*/

$i = 0;

while($i <= 10) {
    echo "Loop externo:" . " " . $i . "<br>";

    //Loop interno
    $j = 1;

    while($j <= 5){
        echo "loop interno:" . " " . $j . "<br>";

        $j++;

    }

    $i++;
}