<?php

$str = "Está e a minha string";

$minha = substr($str, 10, 5);

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 8); // OMITIR COMPRIMENTO = PEGAR ATÉ O FIM

ECHO $novaString . "<br>";

$novaString2 = substr($str2, 8, -3); // COMPRIMENTO NEGATIVO = REMOVER ULTIMO ÍNDICE

echo $novaString2 . "<br>";