<?php

$carro = [
    'jaguar',
    '3.0',
    'azul',
    '18',
    'Teto Solar',
    'automático'
];

print_r($carro);
echo "<br>";

list($modelo, $versao, $cor, $dezoito, $tetoSolar, $automatico) = $carro;

echo "$modelo <br>";
echo "$versao <br>";
echo "$cor <br>";
echo "$dezoito <br>";
echo "$tetoSolar <br>";
echo "$automatico <br>";

