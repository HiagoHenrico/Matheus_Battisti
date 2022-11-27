<?php

$a = 12;
$b = "H";
$c = [];

// 1
if(is_int($a)){
    echo "1 - " . " " . $a . " - " . "E Inteiro <br>";
}else{
    echo "1 - " . " " . $a . " - " . "Não e Inteiro <br>";
}

// 2
if(is_int($b)){
    echo "2 - " . " " . $b . " - " . "E Inteiro <br>";
}else{
    echo "2 - " . " " . $b . " - " . "Não e Inteiro <br>";
}

// 3
if(is_int($c)){
    echo "3 - " . " " . "E Inteiro <br>";
}else{
    echo "3 - " . " " . "Não e Inteiro <br>";
}