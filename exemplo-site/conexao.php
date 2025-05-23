<?php
$servername = "localhost";
$username = "root";
$password = "12345"; //senha do computador da faculdade!
$database = "lojaonline";
$email = $_POST['email'];
$senha = $_POST['senha'];

//confere se a senha é a mesma do banco de dados
$conn = new mysqli($servername, $username, $password, $database);

?>