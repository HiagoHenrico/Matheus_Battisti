<?php


/* Switch
- O switch é uma estrutura de condição, que pode substituir o if em alguns casos;
- Podemos adicionar a instrução break, para ele não ser mais executado;
- Há a possibilidade também de adicionar a instrução default, que é executada caso nenhuma condição seja satisfeita;
*/

$x = 10;


switch($x){
    case 0: 
        echo "X é igual a zero <br>";
        break;
    case 1:
        echo "X é igual a 1 <br>";
        break;
    default:
      echo "X não igual a nenhum <br>";
}

//Agora com if
if($x == 0){
//
}else if($x == 1){
//
}else if($x == 2){

}

//switch com string
$a = "Hiago";
switch($a){
    case "Hiago": 
        echo "O nome é Hiago <br>";
        break;
    case "Matheus":
        echo "O nome Matheus <br>";
        break;
    default:
      echo "Não tem ninguem com esse nome aqui <br>";
}