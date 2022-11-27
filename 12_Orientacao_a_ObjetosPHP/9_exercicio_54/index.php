<?php

class Pessoa {

    public $nome = "Hiago";
    public $idade = 17;

    function andar($nome){

        echo "$nome está andando... <br>";

    }

}

$usuario = new Pessoa;

echo $usuario->nome . "<br>";
echo $usuario->idade . "<br>";

$usuario->andar("Hiago");

echo "Meu nome é $usuario->nome e tenho $usuario->idade anos <br>";

?>