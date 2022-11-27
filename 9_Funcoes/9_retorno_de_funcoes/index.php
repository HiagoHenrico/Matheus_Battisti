<?php


/* Retorno de funções

- Normalmente funções retornam algo, para isso ultilizamos a instrução return;
- O objetivo é armazenar o valor de retorno em uma variável e ultiliza-lo posteriormente no código;
- Exemplo:
   function x(a, b){
       return algumaCoisa;
   } 
*/


function soma($v1, $v2){
    return $v1 + $v2;
}

echo soma(4,4) . "<br>";

$x = soma(5,5);

echo $x . "<br>";

$y = soma($x, 10);

echo $y . "<br>";

function testando(){
    return "Teste";
}

$z = testando();

echo  $z . "<br>";