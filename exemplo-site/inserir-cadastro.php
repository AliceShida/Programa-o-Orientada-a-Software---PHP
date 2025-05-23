<?php
session_start();
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select idusuario from usuario where email = ?";
//prepara a query
$stmt = $conn->prepare($sql);
//executar o filtro
$stmt->bind_param("s", $email);
//executa a query
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows()>0){
    $_SESSION['mensagem'] = "Este e-mail já está cadastrado no sistema";
    header('Location: cadastro-usuario.php');
}else{
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "insert into usuario (nome, email, senha) values (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senhaHash);
    if ( $stmt->execute()){
        $_SESSION['mensagem'] = "Usuário cadastrado com sucesso";
        header('Location: cadastro-usuario.php');
        exit;
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar o usuário, por favor tente novamente";
        header('Location: cadastro-usuario.php');
        exit;
    }
}


?>