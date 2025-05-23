<?php include 'header.php'; session_start(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4"><!--dividindo a tela em 4 colunas-->
        <?php if(isset($_SESSION['mensagem'])): ?><!--verificar se há alguma mensagem na sessão-->
            <div class="alert alert-info"><!--mostra mensagem de erro-->
                <?php echo $_SESSION['mensagem']; unset($_SESSION['mensagem']) ?><!--mostra a mensagem e o "unset" limpa-->
            </div>
            <?php endif; ?>
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Cadastro de Usuário<h4>
                    <form action="inserir-cadastro.php" method="post">
                    <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>