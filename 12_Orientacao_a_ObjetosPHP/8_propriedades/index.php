<?php

/* Declarando propriedades 

- Para declarar propriedades vamos basicamente criar uma variável dentro de uma class;
- Porém precisamos definir a sua privacidade, como por exemplo public;
- Uma propriedade pública pública pode ser acessada fora do escopo do objeto;
- Exemplo: public $idade = 29;
*/

class Carro {

    public $rodas = 4;
    public $aro = 20;
    public $cor = "Azul";

  function ligar(){

    echo "Vrummm Vrummm <br>";

  }
}

$ferrari = new Carro;
$ferrari->rodas = 2;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor . "<br>";

$ferrari->ligar();



?>