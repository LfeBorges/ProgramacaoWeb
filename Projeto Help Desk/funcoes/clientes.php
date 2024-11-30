<?php
require_once('../config/bancodedados.php');

function listarClientes(): array {
    $pdo = getConexao();
    $stament = $pdo->query("SELECT * FROM clientes ORDER BY nome");
    return $stament->fetchAll();
}

function buscarClientePorId(int $id): ?array {
    $pdo = getConexao();
    $stament = $pdo->prepare("SELECT * FROM clientes WHERE id = ?");
    $stament->execute([$id]);
    return $stament->fetch();
}

function criarCliente(string $nome, string $email, string $telefone = null, string $endereco = null): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("INSERT INTO clientes (nome, email, telefone, endereco) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $telefone, $endereco]);
}

function atualizarCliente(int $id, string $nome, string $email, string $telefone = null, string $endereco = null): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("UPDATE clientes SET nome = ?, email = ?, telefone = ?, endereco = ? WHERE id = ?");
    return $stament->execute([$nome, $email, $telefone, $endereco, $id]);
}

function excluirCliente(int $id): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("DELETE FROM clientes WHERE id = ?");
    return $stament->execute([$id]);
}
?>
