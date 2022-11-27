<?php

/* Loop infinito

- O loop infinito é um erro que pode ser ocasionado quando uma estrutura de repetição não tem uma condição de término que seja póssivel;
- Por exemplo: x > 10 e a variável de referência tem um decremento, não um incremento;
- Isso vai fazer o software travar, e pode ser um grande problema caso usuários estejam acessando o mesmo;

*/

for($i = 0; $i < 10; /*$i--*/$i++){
    echo "Número: $i <br.";
}