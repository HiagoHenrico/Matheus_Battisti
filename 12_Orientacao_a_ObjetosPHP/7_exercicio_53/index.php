<?php

class Cachorro {

    function latir($nome){

        echo "$nome meu cachorro está latindo...<br>";
    }

    function andar($nome){

        echo "$nome meu cachorro está andando...<br>";
    }
}

$rex = new Cachorro;
$cerveja = new Cachorro;

$rex->latir("Rex");
$cerveja->andar("Cerveja");



?>