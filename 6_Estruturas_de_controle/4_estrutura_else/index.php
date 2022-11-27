<?php



/* Estrutura Else

- A estrutura else pode executar um outro bloco de código, isso acontece quando a expressão de if é falsa
- Em else não inserimos expressões
- Exemplo:
  if (exp) {
  } else {
  }
*/

//Exemplo 1

if(5 > 2) {
    echo "Entrou no if <br>";
}else{
    echo "Entrou no else <br>";
}

//Exemplo 2 

if("teste" === 5){
    echo "Entrou no if 2 <br>";
}else{
    echo "Entrou no else 2 <br>";
}

//Também da para usar com variáveis e em escopo global