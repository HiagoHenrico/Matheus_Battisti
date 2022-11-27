<?php

/* Encontrando a última ocorrência

- Com a função strrpos podemos encontrar a última ocorr~encia de um texto na string;
- Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
- Se for retornado false, o texto não está na string;
*/

$s = "Testando encontrar palavra teste, em uma string tem teste";

$palavra = strrpos($s, "teste");

echo "$palavra  <br>";

$palavra2 = strpos($s, "teste");

echo "$palavra2 <br>";

if(strrpos($s, "Java") === false){

    echo "A palavra java não foi encontrada <br>";
}

$p = substr($s, strpos($s ,"teste"), 5);

echo "$p <br>";