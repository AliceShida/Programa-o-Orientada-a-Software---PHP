<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === 'admin@uniceplac.edu.br' && $senha === '1234'){
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $email;
    header('Location: dashboard.php');
}else{
    $_SESSION['error'] = 'Usuário ou senha inválidos';
    header('Location: index.php');
}

?>