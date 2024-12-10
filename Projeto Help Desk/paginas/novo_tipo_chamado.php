<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../config/bancodedados.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];

    $pdo = getConexao();
    $stmt = $pdo->prepare("INSERT INTO tipos_chamados (descricao) VALUES (?)");
    $stmt->execute([$descricao]);

    header("Location: tipos_chamados.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Tipo de Chamado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Cadastrar Novo Tipo de Chamado</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>
