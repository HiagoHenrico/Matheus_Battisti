<?php

/* Descobrindo Argumentos

- No php temos duas funções interessantes para aprender mais sobre funções;
- func_get_arg = retorna uma lista com os argumentos de uma função;
- func_num_args = retorna o números de argumentos de uma função;
*/

function soma($a, $b){

    print_r(func_get_args());
    echo "<br>";
    print_r(func_num_args());
    echo "<br>";
    return $a + $b;
}

soma(3,5);