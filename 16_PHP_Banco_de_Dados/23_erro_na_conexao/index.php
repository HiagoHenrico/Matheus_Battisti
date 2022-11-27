<?php

 /* Checando a conexão
 
 - Para verificar se houve algum erro na conexão podemos utilizar a propriedade connect_errno;
 - E para verificar o erro podemos utilizar o método connect_error();
 - Podemos inserir a checagem em um if e mostrar a mesagem de erro com um echo, por exemplo; 
 */

/*
$host = "localhost";
$user = "root";
$pass = "ogaih65";
$db = "cursoPHP";
*/
$conn = new mysqli("localhost", "root", "ogaih65", "cursoPHP");

if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    //echo "Erro: " . mysqli_connect_error();
    //ou
    echo "Erro: " . $conn->connect_error;
}