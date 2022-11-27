<?php

class Cachorro {

    public $idade;
    public $cor;
    public $nome;
    public $raca;

    public function __construct($idade, $cor, $nome, $raca){

        $this->idade = $idade;
        $this->cor = $cor;
        $this->nome = $nome;
        $this->raca = $raca;

    }

    public function exibirAnimal(){

       echo "O cachorro se chama $this->nome tem a pelagem da cor $this->cor fez $this->idade a pouco tempo, raça $this->raca <br>";

    }

}

$rusk = new Cachorro("2 anos", "branco", "Jeff", "Rusk Siberiano");
$rusk->exibirAnimal();