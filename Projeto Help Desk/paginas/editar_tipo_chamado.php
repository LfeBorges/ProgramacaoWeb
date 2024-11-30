<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once('../config/bancodedados.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];

    $pdo = getConexao();
    $stmt = $pdo->prepare("UPDATE tipos_chamados SET descricao = ? WHERE id = ?");
    $stmt->execute([$descricao, $id]);

    header("Location: tipos_chamados.php"); // Redireciona para a lista de tipos de chamados
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pdo = getConexao();
    $stmt = $pdo->prepare("SELECT * FROM tipos_chamados WHERE id = ?");
    $stmt->execute([$id]);
    $tipo_chamado = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo de Chamado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Editar Tipo de Chamado</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $tipo_chamado['id']; ?>">
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="<?= $tipo_chamado['descricao']; ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
    </form>
</div>

</body>
</html>
