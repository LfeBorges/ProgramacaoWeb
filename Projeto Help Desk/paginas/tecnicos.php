<?php
require_once('../config/auth.php');
require_once '../funcoes/tecnicos.php';
require_once('../config/bancodedados.php');

$pdo = getConexao();
$stmt = $pdo->query("SELECT * FROM tecnicos");
$tecnicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Técnicos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-5">
    <h3>Técnicos</h3>
    <a href="novo_tecnico.php" class="btn btn-primary mb-3">Novo Técnico</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Especialidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tecnicos as $tecnico): ?>
            <tr>
                <td><?= $tecnico['id']; ?></td>
                <td><?= $tecnico['nome']; ?></td>
                <td><?= $tecnico['email']; ?></td>
                <td><?= $tecnico['especialidade']; ?></td>
                <td>
                    <a href="editar_tecnico.php?id=<?= $tecnico['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="excluir_tecnico.php?id=<?= $tecnico['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este técnico?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
