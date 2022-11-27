<?php

/*
Operador de concatenação
- Em PHP podemos concatenar valores com . (ponto);
- Concatenar é o ato de juntar vários textos e/ou números em apenas uma string;
- Não há limites de quantas expressões podem ser concatenadas;
*/

echo "testando" . " a " . "concatenação";
echo "<br>";

$t = "testando";
$c = "concatenação";

echo $t . " a " . $c;
echo "<br>";

$marca = "Honda";
$motor = "3.0";
$vm = 200;

echo "O carro da " . $marca . " tem o motor " . $motor . " e chega a uma vvelocidade de " . $vm . " km/h";
echo "<br>";

?>