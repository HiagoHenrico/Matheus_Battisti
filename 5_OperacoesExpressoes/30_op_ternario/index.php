<?php

/* Operador ternario

- Este operador constitui uma estrutura de condição resumida;
- na maioria dos casos vamos optar por if/else;
- Porém em situações simples podemos ultilizar o ternário;
- Exemplo: 5 > 2? echo "5 é maior que dois": echo "5 e menor que 2"
- A primeira interrogação vem antes da comparação;
- E o: é ultilizado para uma segunda situação ,caso a primeira seja falsa;
*/

//true
echo 20 > 10 ? "Deu true <br>" : "Deu false <br>";

//false
echo 20 > 100 ? "Deu true <br>" : "Deu false <br>";

$a = 10;
$b = 5;

echo $a >= $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b ? "Deu true <br>" : "Deu false <br>";

echo $a === $b && 10 > 5 ? "Deu true <br>" : "Deu false <br>";
