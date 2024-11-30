<?php
require_once('../config/bancodedados.php');

function listarTecnicos(): array {
    $pdo = getConexao();
    $stament = $pdo->query("SELECT * FROM tecnicos ORDER BY nome");
    return $stament->fetchAll();
}

function buscarTecnicoPorId(int $id): ?array {
    $pdo = getConexao();
    $stament = $pdo->prepare("SELECT * FROM tecnicos WHERE id = ?");
    $stament->execute([$id]);
    return $stament->fetch();
}

function criarTecnico(string $nome, string $email, string $especialidade = null): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("INSERT INTO tecnicos (nome, email, especialidade) VALUES (?, ?, ?)");
    return $stament->execute([$nome, $email, $especialidade]);
}

function atualizarTecnico(int $id, string $nome, string $email, string $especialidade = null): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("UPDATE tecnicos SET nome = ?, email = ?, especialidade = ? WHERE id = ?");
    return $stament->execute([$nome, $email, $especialidade, $id]);
}

function excluirTecnico(int $id): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("DELETE FROM tecnicos WHERE id = ?");
    return $stament->execute([$id]);
}
?>
