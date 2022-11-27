<?php

/* Limpando uma string

- Podemos remover os espaços em branco de uma string com funções de PHP;
- trim - Limpa espaços antes e depois da string;
- ltrim - Limpa espaços da parte inicial da string;
- rtrim - Limpa espaços da parte final da string;
- Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários;
*/

$s = "      Hiago              ";

echo "Está é a string 1: $s. <br>";

$sLimpa = trim($s);

echo "Esta é a string 1: $sLimpa. <br>";

$sLimpa2 = rtrim($s);
echo "Esta é a string 1: $sLimpa2. <br>";
