<?php

// Checando se é string
// - Podemos ultilizar is_string() para verificar se um dado é uma string;
// - A função recebe um valor como parâmetro;
// - Noovamente receberemos true or false, dependendo do dado enviado;
// - Precisamos ultilizar uma estrutura if para validar o valor;

$str = "Hiago";
$num = 12;

if(is_string($str)){
    echo "1 - $str é uma string <br>";
}

if(is_string($num)){
    echo "2 - $num é uma string <br>";
}

if(is_string("bashs")){
    echo "3 - é uma string <br>";
}


?>