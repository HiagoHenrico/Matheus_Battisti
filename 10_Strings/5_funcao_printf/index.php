<?php

/* Função printf

- A função printf tem a funcionalidade semelhante a print;
- Porém podemos imprimir valores de forma dinâmica ultilizando o símbolo %;
- Exemplo:
   print("Número %d" , 1);
*/

$nome = "Hiago";

// %s -> string
printf("O nome é %s <br>" ,$nome);

// %d  -> int
$n = 122323334;
printf("O número é %d e o outro é %d <br>", $n, 150);

// %f -> float

printf("A temperatura atual é %.2f <br>", 12.45);