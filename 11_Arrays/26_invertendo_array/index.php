<?php

/* Invertendo arrays

- Com a função array_reverse podemos obter o array ao inverso;
- Passamos apenas o array como argumento;
- O retorno será um array invertido do original;
*/

$arr = range( 1, 10);

$arrRev = array_reverse($arr);

print_r($arr);
echo "<br>";
print_r($arrRev);
echo "<br>";

$arr2 = ["Matheus", 12, true, [1,2]];

$arr2Rev = array_reverse($arr2);

print_r($arr2Rev);