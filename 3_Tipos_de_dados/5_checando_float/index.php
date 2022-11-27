<?php

// Checando se é float
// - Podemos ultilizar a função is_float() para verificar se um dado é um float;
// - A função recebe um valor como parâmetro;
// - Novamente receberemos true or false, dependendo do dado enviado;
// - Precisamos ultilizar uma estrutura if para validar o valor;

$a = "string";
$b = 12.56;

if(is_float($a)){ // false
    echo "É float 1! <br>";
}

if(is_float($b)){ // true
    echo "$b e float 2! <br>";
}

if(is_float(34.12)){ // true
    echo "É float 3! <br>";
}

if(is_float("string")){ // true
    echo "É float 4! <br>";
}

?>