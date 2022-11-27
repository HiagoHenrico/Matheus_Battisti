<?php

/* IF aninhado

- podemos também inserir um if dentro de outro;
- Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if;
- Exemplo:
  if(exp) {
  if(exp){

  }  
}
*/

if(10 < 2){
    echo "Entrou no primeiro if <br>";

   if("teste" == "teste"){
       echo "Entrou no segundo if <br>";
   }
}


if(10 > 2){
    echo "Entrou no primeiro if 2<br>";

   if("teste " == "teste"){
       echo "Entrou no segundo if 2<br>";
   } else{
       echo "entrou no segundo else 2 <br>";
   }
}else{
    echo "Entrou no primeiro else 2 <br>";
}