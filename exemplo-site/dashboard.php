<?php
require_once 'verifica-login.php';
include 'header.php';

?>
teste inicial
<div class="container mt-5">
    <div class="alert alert-success">
         Olá<strong> <?php echo $_SESSION['email'] ;?></strong>, você está autenticado
    </div>
    <a href="logout.php" class="btn btn-danger"> Sair</a>
</div>

<?php include 'footer.php'?>