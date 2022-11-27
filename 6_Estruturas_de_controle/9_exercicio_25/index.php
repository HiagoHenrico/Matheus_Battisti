<?php

$v1 = 45;
$v2 = $v1 * 2;
$s = "Hiago";

if(is_int($v1)){
    echo "1 - E um numero <br>";

    if($v2 > 100){
        echo "2 - $v2 é maior que 100 <br>";
    }else{
        echo "2 - $v2 é menor que 100 <br>";
    }
}else{
    echo "1 - Não e um numero <br>";
}

