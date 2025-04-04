<?php
//dados do banco
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "lojaonline";
//conexão
$conn = new mysqli($servername, $username, $password, $database);

$descricao = $_POST['txtNome'];
$modelo = $_POST['txtModelo'];
$preco = $_POST['txtPreco'];

$sql = "insert into produto (descricao, modelo, preco) values (?,?,?)";
$stmt = $conn-> prepare($sql);
//prepara os parâmetros que serão usados
$stmt-> bind_param("ssd", $descricao, $modelo, $preco);
$stmt-> execute();
//mensagem indormando que foi cadastrado
echo "<br><label>Produto cadastrado com sucesso!</label>";
echo "<br><button onclick='history.back()'>Voltar</button>";

?>