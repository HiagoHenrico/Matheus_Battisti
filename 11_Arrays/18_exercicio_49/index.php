<?php

$marca = "Honda";
$motor = "2.4";
$cor = "preto";
$portas = 4;

$carro = compact("marca", "motor", "cor", "portas");

foreach($carro as $caracteristica => $val){

    echo "As caracteristicas desse carro são: $caracteristica => $val <br>";

}