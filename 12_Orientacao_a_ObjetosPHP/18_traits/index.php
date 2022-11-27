<?php

/* Traits

- As traits permitem o reuso do código sem hierarquia de classes, ou seja sem herança;
- Podemos assim ultilizar os métodos da classe que foi feita a trait;
- Ultilizamos a palavra reservada use;
- Exemplo: 
  class Teste{
      use ClassTrait
  }
*/

trait Objeto {
    public function teste(){
        echo "Testando trait de objeto <br>";
    }
}

trait Testando {

    public $y = 10;

    public function traitTeste(){

        echo "Este método é da trait Testando <br> ";
    }
}

class Central {

    use Objeto;
    use Testando;
}

$x = new Central;

$x -> teste();

$x->traitTeste();