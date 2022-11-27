<?php

 /* Selecionando dados com mysqli
 
 - Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
 - A instrução para inserir dados é a SELECT;
 - Vamos inserir o método query em uma variável, que é onde receberemos os resultados;
 - Com o método fetch_assoc, transformaremos os resultados em um array;
 */

$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";

$conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");

// ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO
$itens = $result->fetch_assoc();

// TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);