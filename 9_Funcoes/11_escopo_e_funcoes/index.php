<?php

/* relembrando escopo e funções 

- Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas;
- Podemos ultilizar as variáveis globais com a instrução global;
- E também há o static, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado;
*/

$a = 10;
$b = 15;

function testeEscopo(){
    $a = 5;

    global $b;
    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "ESCOPO LOCAL DE A: $a <br>";
    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
}

echo "ESCOPO GLOBAL DE A: $a <br>";
echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";

testeEscopo();

echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";

testeEscopo();

?>