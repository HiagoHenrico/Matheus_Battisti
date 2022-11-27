<?php


$arr = [
    'porta' => 100,
    'maçã' => 2,
    'motor' => 2000,
    'sofá' => 3000
];

function itensCaros($arr){

    $arrItensCaros = [];

    foreach($arr as $item => $preco){

        if($preco > 10){

            array_push($arrItensCaros, $item);

        }
    }
    return $arrItensCaros;
}

$n = itensCaros();

print_r($n);