<?php

/* A estrutura for
- A for é com certeza a estrutura de repetição mais ultilizada;
- Sua sintaxe é mais organizada, em apenas uma linha e aparenta ser mais difícil, ao primeiro olhar;
- Exemplo:
for(contador; condição; incremento){
    condição
}

*/

$o = 0;
$nome = "Hiago";

// CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO;
for($i = 0; $i <= 10; $i++){

    if($i == 4){

        echo "$nome <br>";

    }

    echo "Testando FOR: $i <br>";

}