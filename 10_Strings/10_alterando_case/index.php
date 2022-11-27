<?php

/* Alterando o case

- Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP;
- strtolower - todas as letras minúsculas;
- strtoupper - todas as letras maiúsculas;
*/

$s = "esta string está em caixa baixa <br>";

echo strtoupper($s) . "<br>";

$s2 = "ESTA AQUI ESTA EM CAIXA ALTA <br>";
echo strtolower($s2) . "<br>";