<?php

// Números decimais (floats)
// - Os floats são todos os números com casas decimais;
// - Como o padrão universal é da língua inglesa, temos a separação de class_alias
// com . e não ,
// - Exemplos de floats: 2.123, 0.04, -12.9;

$a = 1.12;

echo $a;
echo "<br>";

// Com a virgula o php entende como um numero só
echo 1,234;
echo "<br>";
// Jeito correto
echo 1.234;
echo "<br>";
// Soma com float
echo 1.234 + 344.56;
echo "<br>";
// A soma entre float e inteiro e possivel no php
echo 1.234 + 56;



?>