<?php
require_once('../config/bancodedados.php');

function listarTiposChamados(): array {
    $pdo = getConexao();
    $stament = $pdo->query("SELECT * FROM tipos_chamados ORDER BY descricao");
    return $stament->fetchAll();
}

function buscarTipoChamadoPorId(int $id): ?array {
    $pdo = getConexao();
    $stament = $pdo->prepare("SELECT * FROM tipos_chamados WHERE id = ?");
    $stament->execute([$id]);
    return $stament->fetch();
}

function criarTipoChamado(string $descricao): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("INSERT INTO tipos_chamados (descricao) VALUES (?)");
    return $stament->execute([$descricao]);
}

function atualizarTipoChamado(int $id, string $descricao): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("UPDATE tipos_chamados SET descricao = ? WHERE id = ?");
    return $stament->execute([$descricao, $id]);
}

function excluirTipoChamado(int $id): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("DELETE FROM tipos_chamados WHERE id = ?");
    return $stament->execute([$id]);
}
?>
