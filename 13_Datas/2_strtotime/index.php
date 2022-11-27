<?php

/* Função strtotime

- Recebe uma string como parâmetro, que é um texto sinalizando tempo;
- A função tenta interpretar e transformar em data;
- Veja um exemplo da eltilização:
  echo date('d/m/y, strtotime('+2 years)); // 2 anos a mais
*/

$cincodias = strtotime("5 days");
echo $cincodias . "<br>";

$dezdias = strtotime("10 days");
echo $dezdias . "<br>";

$dataAtualMais5 = date('d/m/y' ,$cincodias);
echo $dataAtualMais5 . "<br>";

$dataAtualMais10 = date('d/m/y' ,$dezdias);
echo $dataAtualMais10 . "<br>";

$doismeses = strtotime("2 months");
echo $doismeses . "<br>";

$dataAtualMaisDoisMeses = date('d/m/y' ,$doismeses);
echo $dataAtualMaisDoisMeses . "<br>";

$dozeanos = strtotime("12 yars");
echo date('d/m/y', $dozeanos) . "<br>";

