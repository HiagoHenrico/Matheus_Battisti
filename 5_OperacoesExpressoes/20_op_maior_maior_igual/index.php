<?php


/* Operador maior e maior igual
- O símboloé: >
- Com o operador maior ou igual verificamos se um valor é maior ou igual a outro;
O símbolo é: >=
*/

$a = 4;
$b  = 5;
$c = 6;
$d = 6;

if($a > $b){
    echo "A é maior que B <br>"; //false
}

if($b > $a){
    echo "B é maior que A <br>"; //true //false
}

if($d >= $c){
    echo "D é maior ou igual a C <br>"; //true //false
}

if($c >= $a){ //false
    echo "C é maior ou igual a C <br>"; //false
}
