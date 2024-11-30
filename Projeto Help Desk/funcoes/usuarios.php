<?php

require_once('../config/bancodedados.php');

function login(string $email, string $senha): ?array {
    $pdo = getConexao();
    
    // Validar email com regex antes de consultar o banco
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return null;
    }

    $stament = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
    $stament->execute([$email]);
    $usuario = $stament->fetch();

    // Verificar se senha está correta
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        return $usuario;
    }

    return null;
}

function criarUsuario(string $nome, string $email, string $senha, string $nivel = 'colab'): bool {
    $pdo = getConexao();
    $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);
    
    // Validações extras
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($nome) || empty($senha)) {
        return false;
    }

    $stament = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $senhaCriptografada, $nivel]);
}

// funcoes/usuarios.php
function listarUsuarios(): array {
    $pdo = getConexao();
    $stament = $pdo->query("SELECT id, nome, email, nivel FROM usuario WHERE nivel <> 'adm'");
    return $stament->fetchAll();
}

function buscarUsuarioPorId(int $id): ?array {
    $pdo = getConexao();
    $stament = $pdo->prepare("SELECT id, nome, email, nivel FROM usuario WHERE id = ?");
    $stament->execute([$id]);
    return $stament->fetch();
}

function atualizarUsuario(int $id, string $nome, string $email, string $senha = null): bool {
    $pdo = getConexao();
    if ($senha) {
        $senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);
        $stament = $pdo->prepare("UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE id = ?");
        return $stament->execute([$nome, $email, $senhaCriptografada, $id]);
    }
    $stament = $pdo->prepare("UPDATE usuario SET nome = ?, email = ? WHERE id = ?");
    return $stament->execute([$nome, $email, $id]);
}

function excluirUsuario(int $id): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
    return $stament->execute([$id]);
}
