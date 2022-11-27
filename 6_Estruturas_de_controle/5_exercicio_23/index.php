<?php

$idade1 = 16;
$idade2 = 36;
$idade3 = 18;

$maioridade = 18;

$msg = "Você e maior de idade <br>";
$msg2 = "Você e menor de idade <br>";

if($idade1 >= $maioridade){
    echo "1 - " . " " . $msg . " <br>";
}else{
    echo "1 - " . " " . $msg2 . " <br>";
}

if($idade2 >= $maioridade){
    echo "2 - " . " " . $msg . " <br>";
}else{
    echo "2 - " . " " . $msg2 . " <br>";
}

if($idade3 >= $maioridade){
    echo "3 - " . " " . $msg . " <br>";
}else{
    echo "3 - " . " " . $msg2 . " <br>";
}


