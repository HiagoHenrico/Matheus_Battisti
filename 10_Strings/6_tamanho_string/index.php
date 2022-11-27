<?php


/* Tamanho string

- Ultilizando a função strlen com uma string como parâmetro, vamos receber o tamanho da string;
- Ou seja, a quantidade de caracteres da mesma;
- Exemplo:
  strlen($string);
*/

$string = "Esta string é muito grande";
$string2 = "Essa não";

echo strlen($string) . "<br>";
echo strlen($string2) . "<br>";

$len1 = strlen($string);
$len2 = strlen($string2);

if($len1 > $len2){
    echo "A string 1 é maior que a string 2 <br>";
}else{
    echo "A string 2 é maior que a string 1 <br>";
}