<?php include 'header.php'; session_start(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4"><!--dividindo a tela em 4 colunas-->
        <?php if(isset($_SESSION['error'])): ?><!--verificar se há erros na sessão-->
            <div class="alert alert-danger"><!--mostra mensagem de erro-->
                <?php echo $_SESSION['error']; unset($_SESSION['error']) ?><!--mostra o erro e o "unset" limpa-->
            </div>
            <?php endif; ?>
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Login<h4>
                    <form action="auth.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>