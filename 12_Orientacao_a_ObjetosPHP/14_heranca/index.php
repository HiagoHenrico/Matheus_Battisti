<?php

/* Herança

- A herança é o recurso da OOP que dá a possibilidade de uma classe herdar métodos e propriedades de outra;
- A palavra reservada é extends;
- Exemplo:
   class Programador extends Pessoa {
       // código
   }
*/

class Humano {
    public $idade = 17;

    public function falar(){
        echo "Olá mundo...<br>";
    }

    private function gritar(){
        echo "PHP É MUITO BOM <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixo(){

        echo "lalala <br>";

    }

    public function acessarFalarBaixinho(){
        $this->falarBaixo();
    }
}

class Programador extends Humano {

    public function acessarFalarBaixinhoProgramador(){
        $this->falarBaixo();
    }
}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixinho();

$hiago = new Programador;

echo $hiago->idade . "<br>";
$hiago->falar();
$hiago->acessarGritar();
$hiago->acessarFalarBaixinho();
$hiago->acessarFalarBaixinhoProgramador();