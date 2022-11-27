<?php

/* Exercício 34

- Crie uma função que verifica se um número é par ou impar;
- Se for par imprima uma mensagem;
- Se for ímpar imprima uma mensagem;
*/


function Impar_Par($num){

    if($num % 2 == 0){

        echo "O número em questão é par <br>";

    }else{

        echo "O número em questão é ímpar <br>";
    }
}

Impar_Par(45);