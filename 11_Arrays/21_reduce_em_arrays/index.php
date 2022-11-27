<?php

/* Reduce me arrays

- A função array_reduce tem como objetivo reduzir um array a apenas um valor;
- Podemos passar uma segunda função como parãmetro, para algum processo ser executado;
  array_reduce($arr, $funcao);
*/

$arr = [1, 2, 4, 56, 6, 7,8];

function soma($a, $b){

    return $a + $b;
}

function sub($a, $b){

    return $a - $b;
}

$re = array_reduce($arr, "soma");

echo "Soma: $re <br>";

$re2 = array_reduce($arr, "sub");

echo "Subtração: $re2 <br>";