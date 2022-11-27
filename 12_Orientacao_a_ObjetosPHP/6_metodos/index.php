<?php

 /* Declarando métodos
 
 - Para declarar um método vamos ultilizar a sintaxe de function, porém dentro de uma class;
 - O restante é exatamente igual a sintaxe de função;
 - Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios; 
 */

 class Pessoa {

    function falar(){
        echo "Olá, eu sou um objeto... <br>";
    }

    function somar($a, $b){
        echo $a + $b . "<br>";
    }
 }

 $hiago = new Pessoa;

 $hiago->falar();
 $hiago->falar();

 $joao = new Pessoa;
 $joao->falar();

 $hiago->somar(5, 5);
 $joao->somar(5,10);

?>