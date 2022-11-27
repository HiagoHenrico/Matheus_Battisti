<?php


/* Operador lógico OR
- O operador lógico OR resulta em verdadeiro caso qualquer um dos lados da operação seja verdadeiro
 */

if(5 > 2 || 3 < 4){//true e true
    echo "Operação 1 é verdadeira <br>";
}

if(5 > 2 || 30 < 4){//true e false
    echo "Operação 2 é verdadeira <br>";
}

if(5 > 20 || 3 < 4){//false e true
    echo "Operação 3 é verdadeira <br>";
}

if(5 > 32 || 33 < 4){//false e false
    echo "Operação 4 é verdadeira <br>";
}

$a = 10;
$b = 20;
$c = 23;
$d = 56;

if(($a > $b || $d > $c) && $c < $d){
    echo "Operação 5 e verdadeira <br>";
}