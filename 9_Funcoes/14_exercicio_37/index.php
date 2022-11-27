<?php

function corCarro($cor = "Vermelha"){
    return "A cor do carro é: $cor";
}

$carroVermelho = corCarro();
echo "$carroVermelho . <br>";

$carroAzul = corCarro("Azul");
echo "$carroAzul . <br>";










?>