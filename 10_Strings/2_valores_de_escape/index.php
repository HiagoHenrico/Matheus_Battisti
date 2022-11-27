<?php

/* Valores de Escape

- Podemos ultilizar alguns valores que executam funções especiais em strings;
- Precisamos ultilizar aspas duplas;
- Exemplos: \n = nova linha;
   \t = tab;
   \\ = barra invertida;
   \$ = sinal de dólar; 
*/

// Para funcionar e usado
header("Content-type: text/plain");

// pular linha
echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha \n";

// Tab
echo "Testando o tab \t aqui \n"; 

// Barra invertida
echo "Barra invertida \\ \n";

// Dolar
echo "imprimindo o dólar \$teste";