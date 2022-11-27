<?php


/* Operador não identico a
- Com ele verificamos se um valor e diferente de outro, avaliando o seu tipo também;
- O símbolo é: !==
*/

$a = 1;
$b = "1";

if($a != $b){
    echo "1) A é diferente de B <br>";
}

if($a !== $b){
    echo "2) A é diferente de B <br>";
}

if(1 !== 2){
    echo "Não e identico 1 <br>";
}

if(1 != "1"){
    echo "Não é identico 2 <br>";
}

if([] != "gas"){
    echo "Não é identico 3 <br>";
}