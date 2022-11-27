<?php
/* Operadores de conversão (CAST)
- Com os operadores de conversão podemos forçar uma variável ser de determinado tipo
- Nem todos são uteis ,os mais ultilizados são para converter uma istring em número;
 */

 $a = (int) "12";

 echo $a;
 echo "<br>";
 echo $a + 12;
 echo "<br>";

 if($a === 12){
     echo "A é idêntico a 12 <br>";
 }

 $b = (float) "4.5";

 if($b === 4.5){
     echo "B é identico a 4.5 <br>";
 }

 $c = (string) "h";

 if($c === "h"){
     echo "C é identico a h <br>";
 }

