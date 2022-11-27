<?php

// Checando número inteiro
// - Podemos validar se um dado é inteiro com a função is_int();
// - Caso um número seja inteiro, será retornado true (um outro tipo de dado);
// - Caso não seja, receberemos um retorno de false(tipo de dado também );
// - Precisamos ultilizar uma estrutura if para validar o valor



if(is_int(5)){ // true
echo "É um inteiro <br>";
}

if(is_int("Não é um inteiro")){ // false 
    echo "É um inteiro 2 <br>";
}

$a = 10;

if(is_int($a)){ // true
    echo "É um inteiro 3 <br>";
}

?>