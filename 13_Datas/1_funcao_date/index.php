<?php

/* Função date

- A função date recebe um parâmetro, que é o formato da data, e este é o primeiro parâmetro da mesma;
- A resposta será a data atual;
- Exemplo:
  date("d/m/y"); // day / mounth / year
*/

$d = date('d/m/y'); // dia / mês / ano

echo $d . "<BR>";

$d2 = date('D/M/Y');
echo $d2 . "<br>";

$d3 = date('d, M - Y');
echo $d3 . "<br>";

$d4 = date('l, F - Y');
echo $d4 . "<br>";