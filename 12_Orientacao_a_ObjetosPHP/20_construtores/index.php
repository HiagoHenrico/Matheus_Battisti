<?php

/* Construtores

- Pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto;
- Passamos como argumentos os valores das propriedades;
- Exemplo: 
  function__construct($portas, $motor, $teto_solar) {

  }
*/

class Car{

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca){

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;

    }
    
}

$ferrari = new Car(4, "Vermelha", "Ferrari");

echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

$bmw = new Car(4, "Preto", "BMW");
echo "O carro é da marca $bmw->marca, tem a cor $bmw->cor e possui $bmw->portas portas <br>";

