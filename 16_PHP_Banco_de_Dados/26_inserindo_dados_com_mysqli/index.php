<?php

 /* Inserindo dados com mysqli
 
 - Para inserir com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
 - A instrução para inserir dados é a INSERT INTO;
 - Devemos passar a tabela, colunas e valores;
 */

$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";

$conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");

// ASSUNTO DA AULA

$table = "itens";
$nome = "Xícara";
$descricao = "É uma xicara usada de cor rosa ";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();