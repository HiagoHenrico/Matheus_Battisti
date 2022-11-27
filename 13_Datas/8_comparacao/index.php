<?php

/* Comparação de datas

- Datas que foram criadas com o objeto de DateTime podem ser comparadas ultilizando os operadores de comparação;
- Operadores como: >,< ou ==
- Exemplo:
  $data1 > $data2
*/

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();


$dataB->setDate(2033, 10, 4);
$dataC->setDate(2033, 10, 4);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);


if($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
}else{
    echo "A data A é maior que a data B <br>";

}

if($dataB < $dataA){
    echo "A data A é maior que a data B <br>";
}else{
    echo "A data B é maior que a data A <br>";

}

if($dataB == $dataC){
    echo "As datas A e C são iguais <br>";
}

