<?php

// Arrays (conjunto, lista)
// - O array é um tipo de dado que serve para agrupar um conjunto de valores;
// - Podemos inserir qualquer tipo de dado na lista;
// - A sintaxe é: [1,2,3,4,5];
// - Sempre entre [], dados separados por,
// - Veremos arrays em mais detalhes futuramente, é uma estrutura de dados muito importante e muito ultilizada; 

$a = [1, 2, 3];

//echo $a; // Vai dar erro pois o echo transforma em string

print_r($a); //Se ultilia print_r para exibir o array
echo "<br>";
echo $a[0]; // Posição 0 equivale ao número 1

echo "<br>";
$b = ["string", 1, 0.2, true];
print_r($b);

echo "<br>";
print_r($b[1]);
?>