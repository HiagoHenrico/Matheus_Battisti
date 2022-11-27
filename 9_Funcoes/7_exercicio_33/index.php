<?php

/* Exercício 33

- Crie uma função;
- Ela deve receber um parâmetro de nome e idade;
- Imprima "Olá eu sou o NOME e tenho X anos";
*/

function Pessoa($nome,$idade){
    
    if(is_string($nome) && is_int($idade)){
        echo "Aluno $nome tem idade $idade <br> ";
    }else{
        echo "Apenas use letras para inserir o nome <br>";
    }

}

Pessoa("Hiago", 17);