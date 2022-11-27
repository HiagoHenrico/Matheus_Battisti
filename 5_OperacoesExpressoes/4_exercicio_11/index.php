<?php

// Execício 11
// - Crie um arquivo PHP;
// - Teste a expressão "5"*12;
// - Ultiilize a função gettype() com o resultado como parâmetro para checar o tipo resultado da operação;
// //  

$operacao = "5" * 12;

echo $operacao . "<br>";

echo gettype($operacao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(1.1); //Double = Float
echo "<br>";
echo gettype("Hiago");

