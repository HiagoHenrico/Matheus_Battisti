<?php


$array = ["Hiago", 17, "Irmã", 1.68, true, "Yasmin", 10, [], 1.20, false];

$a = count($array);
$b = 0;

while($b < $a){

    if(is_string($array[$b])){

      echo "As strings no array são: " . " " . $array[$b] . "<br>";

    }
    $b++;
}
