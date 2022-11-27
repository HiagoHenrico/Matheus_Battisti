<?php

/* Array para string

- Podemos converter um array em string com a função implode;
- Passamos primeiro o separador como argumento;
- Depois a string que vai ser convertida;
*/

$array = ["Maçã", "Batata", "Caixa", "Mamão"];

$arrayEmString = implode(",", $array);

echo "$arrayEmString <br>";

$array2 = ["Pistola", "Tanque", "Granada"];

$array2 = implode(" <-> ", $array2);

echo "$array2 <br>";