<?php


/* Do While
- O do while é também uma estrutura de repetição;
- Porém menos ultilizada que o while;
- A sintaxe é invertida, veja um exemplo:
do{
    código
}while(condição);
*/

// Exemplo 1
$i = 0;

do{
    echo "Testando while: $i <br>";

    $i++;
}while($i < 10);

// Exemplo 2
$o = 10;
$teste = "Hiago";

do{

    echo "Testando while 2: $o <br>";
    
    if($o == 2){
        echo "$teste <br>";
    }
    
    $o--;

}while($o > 0);