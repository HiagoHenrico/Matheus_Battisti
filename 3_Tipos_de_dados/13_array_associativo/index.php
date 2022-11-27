<?php

// Array Associativo
// - O array associativo é basicamente um array, porém com chave e valor;
// - A estrutura base é a mesma, mas vamos construir dessa maneira;
// - $arr = ['nome' => 'Matheus', idade => 25]
// - Chave entre aspas, seta para apontar o valor e valor

$array = ['Nome' => 'Cachorro' ,'Patas' => 4, 'Cor' => 'Preto'];

echo $array['Nome'];
echo "<br>";
print_r($array);
echo "<br>";
echo $array['Patas'];

$arrayasso  =[ 'chave' => 'valor', 'bool' => true];

echo "<br>";
print_r($arrayasso);