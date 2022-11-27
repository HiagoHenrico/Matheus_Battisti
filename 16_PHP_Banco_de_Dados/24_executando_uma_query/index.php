<?php

 /* Executando uma query
 
 - Para executar uma query vamos usar o método query;
 - Ele deve ser utilizado a partir do objeto que fez a conexão;
 - Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;
 - É importante ao fim de todas as querys fechar a conexão, com o método close;
 - Conexões abertas gastam recursos  do servidor recursos do servidor e prejudicam a aplicação;
 */

 
$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";

$conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");

// ASSUNTO DA AULA
$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

print_r($result);

$conn->close();