<?php

/* Função com parâmetro

- Podemos passar parâmetros para a função;
- Estes parâmetros são como variàveis, que são ultilizados dentro da função para moldar a sua execução;
- Não há número máximo de parâmetros;
- function teste(p1, p2){
    // código
}

*/

function Vm($vel){
    // Adicionando um tratamento
    if(is_int($vel)){
      echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    
    }else{
        echo "Por favor, passe um número inteiro <br>";
    }

}

Vm(200);
Vm(250);
Vm(300);

// Uma função sem parâmetro gera um erro, parando o programa
// Vm();

$Vel = 121;
Vm($Vel);

//PHP ignora parâmetros denecessarios
Vm(100, "Honda");

// Mais parâmetros
function descAnimal($nome, $raca){

    echo "O $nome é da raça $raca <br>";
    
}

descAnimal("Jubileu", "Calopsita");


?>