<?php


// Parâmetros de função 
// - Os parâmetros de função também são considerados tipos de variáveis;
// - Este recurso nos ajuda a criar funções com valores dinâmicos;
// - Podendo altera-los a cada invocação da mesma;
// - podemos passar mais de um parâmetro para uma função;

function soma($num1, $num2) {
    echo $num1 + $num2;
    echo "<br>";
}

soma(1,3);
soma(10,53);
soma(13,43);