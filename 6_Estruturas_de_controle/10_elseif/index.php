<?php


/* Else if

- Com o else if podemos criar um novo bloco de expressão;
- Este bloco sera executado caso o primeiro if seja falso;
- O else if fica entre o if e o else;

*/
//true e false
if(10 > 5){
    echo "Entrou no if <br>";
}else if (10 > 6){
    echo "Entrou no else if <br>";
}

//false e true
if(10 < 5){
    echo "Entrou no if 2<br>";
}else if (10 > 6){
    echo "Entrou no else if 2<br>";
}

//false e false
if(10 < 5){
    echo "Entrou no if 3<br>";
}elseif(11 > 1){
    echo "Entrou no segudo else if 3<br>";

}else if (10 < 6){
   echo "Entrou no else if 3<br>";
}