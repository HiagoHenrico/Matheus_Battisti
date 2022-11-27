<?php

// Variável Local  
// - A variável local tem seu escopo definido dentro de uma função
// - Ela não é acessivel fora da mesma 
// - O seu valor sempre e resetado quando a função e finalizada 

$a = 10;
echo "$a global <br>";


function teste(){
    $a = 5;
    echo "$a local <br>";
}
teste();

echo "$a global <br>";

teste();


function testando(){
    $a = 12;
    echo "$a local 2 <br>";
}

echo "$a global <br>";
teste();
testando();