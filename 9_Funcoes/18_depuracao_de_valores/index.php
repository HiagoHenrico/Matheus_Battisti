<?php

/* Depuração de Valores

- Ultilizamos duas funções para verificar dados formatados:
    print_r e var_dump;
- As duas apresentam os dados de forma semelhante;
- Porém var_dump exibe de uma forma "human readable", traduzindo seria algo como "para humanos lerem";
*/

$arr = [
    "teste",
    122,
    1.9,
    true,
    [2,1,4]
];

print_r($arr);

echo "<br>";

var_dump($arr);

?>