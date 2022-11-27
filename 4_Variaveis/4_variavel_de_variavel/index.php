<?php

// Variável de Variável
// - Podemos criar uma variável por meio do nome de outra variável, com um valor diferente;
// - o símbolo para esta função é o $$;
// $var = "teste";
// $$var = "7";
// - Após a execução do código, a variável teste (conteúdo de $var), será criada com o valor 7;

$a = "nome"; // valor de nome

echo "$a <br>";

$$a = "Hiago"; // variável com o nome a (nome), com valor de Hiago

echo "$nome <br>";