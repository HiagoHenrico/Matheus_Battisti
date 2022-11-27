<?php


/* Operadores de atribuição
- Com estes operadores podemos atribuir valor a uma variável;
- O mais conhecido é o =, porém temos algumas variações do mesmo;
- Operadores: +=, -=, /=, *= e %=;
- Cada um destes fara uma atribuição antes da operação
*/

$a = 0;
$a += 10; // $a = $a + 10

echo $a . "<br>";

$b = 0;
$b -= 10; // $b = $b - 10

echo $b . "<br>";

$c = 2;
$c *= 10; // $c = $c * 10

echo $c . "<br>";

$d = 24;
$d /= 2; // $d = $d / 2

echo $d . "<br>";

$e = 5;
$e  %= 2; // $e = $e % 2

echo $e . "<br>";

//ultilizando com variáveis
$f = 10;
$x = 20;

$f += $x; // $f = $f + $x;
echo $f . "<br>";