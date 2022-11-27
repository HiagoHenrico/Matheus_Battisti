<?php

/* Checando ancestralidade 

- Para checar a ancestralidade de uma classe ultilizamos o operador instanceof;
- Podemos inserir essa operação em um if, pois vai retornar um booleano;
- Exemplo:
  $objeto instanceof Humano
*/

class Humano {

}

class Animal{

}

class Professor extends Humano {
    
}

$marcos = new Humano;
$turca = new Animal;

if($marcos instanceof humano){

    echo "Marcos é um humano <br>";
}else{
    echo "Marcos não é um humano <br>";
}

if($turca instanceof Humano ){
    echo "Turca é humano <br>";
}else{
    echo "Turca não é um humano <br>";
}