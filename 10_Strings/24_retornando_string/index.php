<?php

/* Retornando o resto da string 

- Com a função strstr podemos encontrar um texto em uma string;
- Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado;
- Se não encontrar nada retorna false;
*/

$s = "Testando o resto da string, para ver sa dá certo";

$resto = strstr($s, "resto");

echo $resto . "<br>";

$s2 = "string";

$resto2 = strstr($s, $s2);

echo "$resto2 <br>";

if(strstr($s, ".NET") === false){

    echo "Não encontramos a string! <br>";
}