<?php

 /* Conectando com mysqli

  - Para conectar ao MySQL com o mysqli é muito simples ,precisamos utilizar a função mysqli_connect;
  - Passar os parâmetros de: host, usuário, senha e banco de dados;
  - Com a conexão feita podemos utilizar as querys;
  - Exemplo:
    $conn = new mysqli("host", "user", "pass", "db");
 */

 $host = "localhost";
 $user = "root";
 $pass = "ogaih65";
 $db = "cursoPHP";

 $conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");