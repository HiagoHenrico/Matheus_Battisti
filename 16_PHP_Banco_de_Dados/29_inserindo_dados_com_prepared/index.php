<?php

 /* Inserindo dados com prepared   
 
 - Para inserir dados com prepared statement vamos seguir a ideia da aula anterior;
 - prepare => bind_param => execute;
 - como teremos uma  variável para guardar estes três passos, também devemos fechar a conexão desta variável;
 - Ela é  comumente chamada de statement; (declaração)
 - Lembre-se de fechar a conexão;
 */

 $host = "localhost";
 $user = "root";
 $pass = "ogaih65";
 $db = "cursoPHP";

 $conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$nome = "Suporte de Microfone";
$descricao = "O suporte e novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)"); // s = string, i = integer, d = double 

$stmt->bind_param("ss", $nome, $descricao);

$stmt->execute();

$stmt->close();