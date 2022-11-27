<?php

/* Ordem aleatório de itens

- Com a função shuffle podemos reorganizar os itens em ordem aleatória;
- Passamos apenas o array como parâmetro;
- Temos um array retornado em ordem aleatória;
*/

$arr = range(1, 20);

shuffle($arr);

print_r($arr);
echo "<br>";

// Reordenando novamente
shuffle($arr);

print_r($arr);
echo "<br>";