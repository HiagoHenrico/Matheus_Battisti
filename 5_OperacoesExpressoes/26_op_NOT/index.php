<?php

/* Operador lógico NOT
- O operador lógico NOT apenas inverte o resultado booleano de uma operação ,se é true vira false e se e false vira true;
- Símbolo: !; 
- Exemplo: !true # false
*/

if(!(5 > 2)){ // true -> false
    echo "A operação 1 é verdadeira <br>";
}

if(!(5 > 20)){ // false -> true
    echo "A operação 2 é verdadeira <br>";
}