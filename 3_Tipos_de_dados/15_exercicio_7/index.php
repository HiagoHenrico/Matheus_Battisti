<?php

// Exercicio 7
// - Crie um arquivo PHP;
// - Crie um array associativo com caracteristicas de uma pessoa;
// - Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem ,caso seja;

$pessoa = [
    'nome' => 'Matheus',
    'idade' => 34,
    'profissao' => 'Programador',
    'graduacao' => 'Sistemas da Informação'
];

// Desafio
if($pessoa['idade'] >= 18){
    echo "Essa pessoa e maior de idade!";
}

?>