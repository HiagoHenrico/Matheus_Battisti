<?php

/* Exercício 31

- Crie um array com strings;
- Ultilize a função implode no array;
- Primeiro argumento: ",";
- Segundo argumento: o seu array;
- Atribua a invocação da função a uma variável
*/

$arr = ["Terça", "Quarta", "Quinta", "Sexta"];

$teste = implode(",",$arr);

echo $teste . "<br>";


?>