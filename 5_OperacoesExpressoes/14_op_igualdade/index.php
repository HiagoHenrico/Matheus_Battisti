<?php

/* Operador de igualdade

- Com o operador de igualdade verificamos se um valor é igual a outro
- O símbolo é: ==
- Exemplo: 5 == 4 #false
- Exemplo: 3 == 3 #true

*/

//Exemplo 1
if(3 == 3){
    echo "Comparação verdadeira <br>";
}

//Exemplo 2
if(3 == 4){
    echo "Comparação verdadeira 2<br>";
}

$a = 12;
$b = 12;
$c =100;

if($a == $b){
    echo "Comparação verdadeirA 3 <br>";
}

if($a == $c){
    echo "Comparação verdadeira 4 <br>";
}

$nome = "Hiago";
$nm = "Mario";

if($nome == $nm){
    echo "O nome coincide 1 <br>";
}

if($nome == $nm){
    echo "O nome coincide 2<br>";
}