<?php
session_start();
require_once('../config/bancodedados.php');

$erro = ""; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if ($username && $senha) {
        $pdo = getConexao();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        $usuario = $stmt->fetch();

        if ($usuario && hash('sha256', $senha) === $usuario['senha']) {
            $_SESSION['usuario'] = $usuario['username'];
            header("Location: /paginas/dashboard.php");
            exit();
        } else {
            $erro = "Usuário ou senha inválidos!";
        }
    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center">Login</h3>
            <?php if (!empty($erro)) : ?>
                <div class="alert alert-danger"><?= $erro; ?></div>
            <?php endif; ?>
            <form method="POST" action="login.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
