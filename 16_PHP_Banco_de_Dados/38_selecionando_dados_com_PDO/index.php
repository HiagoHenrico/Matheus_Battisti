<?php

 /* Selecionando dados com PDO
 
 - Para selecionar dados a abordagem também é parecida com mysqli;
 - Vamo seguir com a sequência: prepare => bind_param => execute;
 - Porém para o resgate dos dados temos dois métodos:
  fetch: recebe apenas a primeira ocorrência;
  fetchAll: recebe todos os dados;
 */

$host = "localhost";
$db = "cursoPHP";
$user = "root";
$pass = "ogaih65";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA
$id = 5;

$stmt= $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

# $data = $stmt->fetch();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);