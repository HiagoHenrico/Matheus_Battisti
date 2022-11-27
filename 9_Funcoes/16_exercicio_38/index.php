<?php


$lista = ["Arroz", "Farinha","Peixe", "Sal", "Linguiça"];

function listaString($arr){

    $str = "você levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++){
        if($i + 1 == count($arr)){
            $str .= "$arr[$i]. ";

        }else{
            $str .= "$arr[$i], ";

        }

    }
    return $str;

}

echo listaString($lista);