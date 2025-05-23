<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
//se não existir a sessão logado, vou redirecionar para tela de login
    if(!isset($_SESSION['logado'])){
        header('Location: index.php');
    }

?>