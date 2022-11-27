<?php

// Objetos
// - PHP possui o paradigma de orientação a objetos;
// - Podemos criar classes e objetos, e o objeto é considerado um tipo de dado;
// - Objetos possuem métodos que são suas ações e propriedades que são caracteristicas;
// - Veremos objetos em maiores detalhes futuramente no curso;

class Pessoa{
    function falar(){
        echo "Olá pessoal";
    }
}

$matheus = new Pessoa();

$matheus-> nome = "Matheus";

echo $matheus->nome;

echo "<br>";
$matheus->falar();

?>