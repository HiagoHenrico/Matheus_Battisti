<?php
 
 /* Atualizando dados com PDO
 
 - Para atualizar a abordagem também é parecida;
 - Vamos seguir com a sequência: prepare => bind_param => execute
 - E então a query persistirá no banco:
  $stmt = $conn->prepare("UPDATE x SET a = ?, b = ? WHERE c = ?");
 */


$host = "localhost";
$db = "cursoPHP";
$user = "root";
$pass = "ogaih65";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA
$id = 5;
$nome = "Teclado Microsoft";
$descricao = "Este taclado é novo e está na caixa.";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();