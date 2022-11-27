<?php

/* Alterando o case de palavras

- Podemos alterar o case apenas das palavras com funções de PHP;
- ucfirst - primeira letra da string em maiúscula;
- ucwords - primeira letra de cada palavra em maiúscula;
*/

$frase= "testando o case de uma palavra <br>";
$frase2= "testando o case de uma palavra <br>";
$frase3= "testando o case de uma palavra <br>";

// primeira letra em maiúsculo
echo ucfirst($frase);
echo ucfirst($frase2);

// Todas as palavras com as iniciais maiúsculas
echo ucwords($frase3);
echo ucwords($frase2);
