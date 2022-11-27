<?php


/* Saindo de loop
- Podemos sair de um loop while antes do seu fim;
- Para isso é necessario adicionar a instrução break;
- Após interpretada, o loop será automaticamente finalizado;
- Geralmente inserimos está instrução em uma condição if;
*/


$v = 0;

while($v < 10){
    echo "A variável é $v <br>";

    if($v === 5){
        echo "Fim do loop <br>";
        break;
    }

    $v++;
}