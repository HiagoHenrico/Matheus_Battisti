<?php

// Variável global 
// - A principal caracteristica de variável global é ser declarada fora de funções;
// - Por comportamento padrão não são acessíveis dentro de funções;
// - Precisamos ultilizar a palavra global para isso;
// - Essa função de variável global não ser acessível dentro de funções;
// Previnindo muitos problemas futuros 

$teste = "heh";

echo "$teste global 1 <br>";

if(5 > 2){

$teste = "heh";

echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function funcao(){
    $teste = "testando";
    echo "$teste local <br>";
}
funcao();

function testandoGlobal(){
    global $teste;

    $teste = 2;

    echo "$teste global função <br>";
}
testandoGlobal();

echo "$teste global 3 <br>";