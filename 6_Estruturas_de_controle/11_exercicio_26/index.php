<?php

$velocidade = 30;
$velocidadeMaxima = 300;


if($velocidade < 40){
    echo "Velocidade segura  <br>";
}else if ($velocidade == $velocidadeMaxima){
    echo "Você está no limite de velocidade! <br>";
}else{
    echo "Você foi multado!!! <br>";
}

