<?php

$lista = "Carro - Navio - Helicoptero - Barco - Jangada";
$listaArray = explode(" - ", $lista);

for($i = 0; $i < count($listaArray); $i++){


    echo "Item: $listaArray[$i] . <br>";


}