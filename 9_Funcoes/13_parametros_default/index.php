<?php


/* Parâmetros default 

- Podemos passar parâmetros que já possuem um valor pré-determinado;
- Então caso não passe este parâmetro, o valor default entra em cena;
- A função será executada normalmente com o valor definido;
- Exemplo:
   function teste($a = "padrão"){
       //código
   }
*/

function teste($a = "teste"){
    echo "O valor de A é: $a <br>";

}

teste();
teste("exe");


function testando($a = "x", $b){
    echo "O valor de A é: $a e de B é: $b <br>";
}
testando("1");
testando("1", "2");
?>