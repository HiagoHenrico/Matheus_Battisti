<?php

// Null
// - O tipo de dado Null tem apenas um valor, o NULL;
// - Um caso de uso do Null seria checar se uma variável tem ou não valor;
// - Podemos checar se um valor e null com is_null();

echo NULL;

$nome = NULL;

if(is_null($nome)) {
    echo "O valor é nulo!";
}

$nome = "Matheus";

if(is_null($nome)) {
    echo "O valor é nulo! 2";
}

?>