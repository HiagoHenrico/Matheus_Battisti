<?php

/* Adicionando dados a um array

- Podemos criar novos índices com dados em um array;
- Basta por o nome do array com o novo índice em colchetes e atribuir o valor;
- Ex:
  $arr[1] = "teste"
- E em arrays associativos basta ultilizar o nome da nova chave com  a atribuição de valor;
*/

$arr = [];

// Adicionando valores
print_r($arr);
echo "<br>";

$arr[0]=10;

print_r($arr);
echo "<br>";

$arr[1]=11;

print_r($arr);
echo "<br>";

// Modificando valores
$arr[1] += 40;

print_r($arr);
echo "<br>";

$arrAssoc = [];

print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["avião"] = "Boeing";

print_r($arrAssoc);
echo "<br>";