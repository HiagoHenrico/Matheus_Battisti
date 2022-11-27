<?php

// variável por referência
// - Podemos criar uma variável com referência a outra;
// - O símbolo é =&;
// - Se mudamos a variável de referência a referencia muda o valor e ao contrário também gera a mudança;
// $x = 2;
// $y =& $x;

 $a  = 10;
 $b =& $a;

echo "$a <br>";
echo $b;
echo "<br>";

$a = 1;

echo "Atribuição pós referência 1<br>";
echo "$a <br>";
echo $b;
echo "<br>";

$a = 56;

echo "Atribuição pós referência 2<br>";
echo "$a <br>";
echo "$b <br>";

$nome1 = "Hiago";
$nome2 =& $nome1;

echo "$nome1 <br>";
echo "$nome2 <br>";