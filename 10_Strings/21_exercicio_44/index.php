<?php

/* Exercício 44

- Converta a seguinte array para uma string:
["O","PHP","é","muito","legal"]
*/

$array = ["O", "PHP", "é", "muito", "legal"];

$string = implode(" ", $array);

echo "$string <br>";