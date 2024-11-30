<?php
require_once('../config/auth.php');
require_once '../funcoes/clientes.php';
require_once('../config/bancodedados.php');

$pdo = getConexao();
$stmt = $pdo->query("SELECT * FROM clientes");
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-5">
    <h3>Clientes</h3>
    <a href="novo_cliente.php" class="btn btn-primary mb-3">Novo Cliente</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id']; ?></td>
                <td><?= $cliente['nome']; ?></td>
                <td><?= $cliente['email']; ?></td>
                <td><?= $cliente['telefone']; ?></td>
                <td>
                    <a href="editar_cliente.php?id=<?= $cliente['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="excluir_cliente.php?id=<?= $cliente['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir este cliente?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
