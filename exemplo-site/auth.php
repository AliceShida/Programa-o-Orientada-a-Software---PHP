<?php
session_start();
// importa e executa o conteúdo de um arquivo externo em outro script
require_once  'conexao.php';

$stmt = $conn -> prepare("select senha from usuario where email = ?");
$stmt -> bind_param("s", $email);
$stmt -> execute();
$stmt -> store_result();

if($stmt -> num_rows === 1){
    $stmt -> bind_result($hashemail);
    $stmt -> fetch();

    if(password_verify($senha, $hashemail)){
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
    }else{
        $_SESSION['error'] = 'Senha inválida';
        header('Location: index.php');
    }

}else{
    $_SESSION['error'] = 'Email inválido';
    header('Location: index.php');
}


?>