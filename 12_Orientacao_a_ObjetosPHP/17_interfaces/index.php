<?php

/* Interfaces

- As interfaces criam um modelo de definição de uma classe;
- Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente;
- A palavra reservada é implements;
- Exemplo:
  class Humano implements Caracteristicas
*/

interface Caracteristicas {

    const nome = "Samuel";

    public function falar();
}

class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar(){
        echo "Olá mundo...<br>";
    }

    public function dizerNome(){
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$samuel = new Humano;

$samuel->falar();
$samuel->dizerNome();