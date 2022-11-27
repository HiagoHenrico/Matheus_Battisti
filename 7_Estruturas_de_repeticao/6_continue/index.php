<?php



$i = 10;

while($i > 0){

    if($i == 5 || $i == 7){
        echo "Pulou a execução:" . " " . $i . "<br>";
        $i--;
        continue;
    }

    if($i == 2){
        echo "Fim do loop $i <br>";
        break;
    }

    echo "Executando o loop:" . " " . $i . "<br>";
    $i--;
}