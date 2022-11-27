<?php

$arr = [];

for($i=0; $i<30; $i++){

    array_push($arr, $i);
}

//print_r($arr);

function newArray($array){

    $arrayRetorno = [];

    for($o = 0; $o < count($array); $o++){
        if($array[$o] > 7){
            array_push($arrayRetorno, $array[$o]);
        }
    }

    return $arrayRetorno;

}

$n = newArray($arr);

print_r($n);