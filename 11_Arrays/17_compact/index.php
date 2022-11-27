<?php

/* Criando array com compact 

- Com a função compact podemos criar um array a partir de variáveis;
- Passamos para a função o nome das variáveis em string;
- E então um novo array é criado, podemos atribuir a uma variável;
*/

$marca = "BMW";
$motor = "3.0";
$portas = 4;

$carro = compact("marca", "motor", "portas");

print_r($carro);