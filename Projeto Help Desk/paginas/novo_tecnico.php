<?php
require_once('../config/auth.php');
require_once('../config/bancodedados.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $especialidade = $_POST['especialidade'];

    $pdo = getConexao();
    $stmt = $pdo->prepare("INSERT INTO tecnicos (nome, email, especialidade) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $especialidade]);

    header("Location: tecnicos.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Técnico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-5">
    <h3>Novo Técnico</h3>
    <form method="POST" action="novo_tecnico.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="especialidade" class="form-label">Especialidade</label>
            <input type="text" name="especialidade" id="especialidade" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>
