<?php

// Exercício 6
// - Crie um arquivo PHP;
// - Crie um array com características de um carro;
// - Imprima duas características;

$array = ['Veiculo' => 'Carro', 'Marca' => 'Honda', 'rodas' => 4, 'cor' => 'preto'];

print_r($array);

$cor = $array['cor'];
$marca = $array['Marca'];

echo "<br>";
echo "O carro era da $marca tingido de $cor";