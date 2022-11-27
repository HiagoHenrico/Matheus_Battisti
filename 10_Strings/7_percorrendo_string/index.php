<?php

/* Percorrendo uma string

- Podemos percorrer cada um dos caracteres de uma string;
- Para isso vamos ultilizar uma estrutura de repetição;
- E o método strlen, para saber o número de caracteres;
- Com isso podemos iterar pela string completa;
  for($x = 0; $x < strlen($str); $x++){
      //código
  }
*/

$str = "Esta é uma string grandona";

for($i = 0; $i < strlen($str); $i++){

    echo "$str[$i] <br>";
}