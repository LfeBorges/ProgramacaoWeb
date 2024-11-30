<?php
require_once('auth.php');
require_once('config/bancodedados.php');

$id = $_GET['id'];
$pdo = getConexao();
$stmt = $pdo->prepare("SELECT * FROM clientes WHERE id = ? LIMIT 1");
$stmt->execute([$id]);
$cliente = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $stmt = $pdo->prepare("UPDATE clientes SET nome = ?, email = ?, telefone = ? WHERE id = ?");
    $stmt->execute([$nome, $email, $telefone, $id]);

    header("Location: clientes.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-5">
    <h3>Editar Cliente</h3>
    <form method="POST" action="editar_cliente.php?id=<?= $id; ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $cliente['nome']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $cliente['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $cliente['telefone']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>
