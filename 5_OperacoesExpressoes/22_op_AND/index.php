<?php


/* Operador lógico AND
- Os operadores lógicos em conjunto dos de comparação também retornam um booleano
- No caso de AND temos true apenas quando as duas comparações são verdadeiras;
- Símbolo: &&;
*/

if(5 > 10 && 10 > 5){ //false e true
    echo "Entrou no if 1 <br>";
}

if(50 > 12 && 34>2){#true e true
    echo "Entrou no if 2 <br>";
}

if(50 > 12 && 1>2){#true e false
    echo "Entrou no if 3 <br>";
}

$a = 1;
$b = 2;
$c = 3;
$d = 3;

if($a > $b && $c == $d ){
    echo "entrou no if 4 <br>";
}

if($a <= $b && $c >= $d ){
    echo "entrou no if 5 <br>";
}

if($a === $b && $c > $d ){
    echo "entrou no if 6 <br>";
}

if(($b <= $a && $c >= $d) && $c === $a ){
    echo "entrou no if 7 <br>";
}

if($b <= $a && $c >= $d && $c == $a ){
    echo "entrou no if 8 <br>";
}