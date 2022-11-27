
<?php

/* Diferença entre arrays 
- Podemos verificar qual a diferença entre dois ou mais arrays com PHP;
-  A função que vamos ultilizar para isso é a array_diff;
- Esta função aceita um número indeterminado de arrays

*/

$arr = [1, 2, 3];
$arr2 = [2, 5, 6];

$diff = array_diff($arr, $arr2);

print_r($diff);
echo "<br>";

$diff2 = array_diff($arr2, $arr);

print_r($diff2);
echo "<br>";

$arr3 = [4];

$diff3 = array_diff($arr2, $arr, $arr3);

print_r($diff3);
echo "<br>";