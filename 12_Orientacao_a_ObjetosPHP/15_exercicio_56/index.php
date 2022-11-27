<?php

class Humano {

    public $maos = 2;
    public $pernas = 2;

   public function falar(){
       echo "Olá...<br>";
   }

}

class Professor extends Humano {

   public $disciplina = "Matemática";

   public function Lecionando(){

    echo "O professor está dando aula de $this->disciplina <br>";

   }

}

$hiago = new Humano;

echo "$hiago->maos <br>";
$hiago->falar();

$charlinhos = new Professor;

echo "$charlinhos->pernas <br>";
echo "$charlinhos->disciplina <br>";

$charlinhos->falar();
$charlinhos->Lecionando();