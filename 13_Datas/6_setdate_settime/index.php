<?php

/* Métodos setDate e setTime

- Temos mais dois métodos interessantes em DateTime: setDate e setTime;
- setDate => Recebe ano, mês e dia, alterando completamente a data;
- setTime => Recebe hora, minuto e segundo, alterando o tempo da data;
*/

$data = new DateTime();

// Data
print_r($data);
echo "<br>";

$data->setDate(1999, 12, 03);
print_r($data);
echo "<br>";

// Tempo
$data->setTime(06, 12, 10);
print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";