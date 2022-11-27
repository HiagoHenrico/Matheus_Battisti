<?php

/* Verificando se valor existe

- Com a função array_key_exists podemos verificar se há um valor em uma respectiva key de um array;
- Podemos fazer essa checagem em um if;
- Exemplo: array_key_exists("nome", $arr)
- Outra função que podemos ultilizar para este fim é a isset;
*/

$arr = [
    'nome' => 'Hiago',
    'idade' => 17
];

if(array_key_exists("nome", $arr)){

    echo "A chave existe! <br>";

}else{

    echo "A chave não existe! <br>";

}

if(array_key_exists("profissao", $arr)){

    echo "A chave existe! <br>";

}else{

    echo "A chave não existe! <br>";

}

// Ultilizando isset

if(isset($arr['teste'])){

    echo "A chave existe! <br>";

}else{

    echo "A chave não existe! <br>";
}

// Também e possivel ultilizar o ISSET com variáveis

$num = "Olá mundo!";

if(isset($num)){

    echo "A variável existe! <br>";

}else{

    echo "A variável não existe! <br>";
    
}