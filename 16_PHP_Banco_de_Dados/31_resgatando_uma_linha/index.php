<?php

 /* Resgatando apenas uma linha
 
 - Para os selects que precisamos de apenas um dado retornado, podemos utilizar o fetch_row;
 - Este método pode ser inserido depois de obter o resultado, ou seja, após o get_result;
 */

 // ASSUNTO DA AULA

 $host = "localhost";
 $user = "root";
 $pass = "ogaih65";
 $db = "cursoPHP";

 $conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close();
