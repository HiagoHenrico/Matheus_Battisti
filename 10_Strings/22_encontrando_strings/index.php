<?php

/* Encontrando a primeira ocorrência 

- Com a função strpos podemos encontrar algum texto na string;
- Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
- Se for retornado false, o texto não está na string;
*/

$s = "Testando o método strpos, com ele podemos encontrar strings";

$teste= strpos($s, "strpos");

echo "$teste <br>";

$teste2 = strpos($s, "Java");

echo "$teste2 <br>";

if($teste2 === false){

    echo "Palavra não encontrada <br>";
}

$palavra = "com";

$teste3 = strpos($s ,$palavra);

echo "$teste3 <br>";