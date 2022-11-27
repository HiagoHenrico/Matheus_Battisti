<?php

 /* Criando e deletando tabelas com mysqli
 
 - Para criar e deletar tabelas vamos utilizar as mesmas querys de SQL puro, porém com o auxílio do método query;
 - DROP TABLE para deletar tabelas;
 - CREATE TABLE para criar tabelas;
   LEMBRE DE FECHAR A CONEXÃO !
 */

$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";

$conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");

// ASSUNTO DA AULA
//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();