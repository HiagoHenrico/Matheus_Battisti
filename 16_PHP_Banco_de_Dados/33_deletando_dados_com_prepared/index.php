<?php

 /* Deletando dados com prepared
 
 - Para atualizar dados vamos seguir os mesmos passos com INSERT e SELECT;
 -  Na hora de inserir o WHERE para remover os registros, vamos inserir os prepared statements;
 - Sequência: prepare => bind_param => execute;
 - Lembrando que DELETE sem WHERE, causa a remoção de todos os registros;
 */

$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$nome = "Mustang";


$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("i", $nome);

$stmt->execute();

$conn->close();