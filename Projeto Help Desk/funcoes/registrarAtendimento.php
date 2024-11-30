<?php

require_once '../config/bancodedados.php';

function registrarAtendimento($cliente_id, $tecnico_id, $tipo_chamado_id, $descricao, $data_atendimento) {
    try {
        $pdo = getConexao();
        $stmt = $pdo->prepare("INSERT INTO atendimentos (cliente_id, tecnico_id, tipo_chamado_id, descricao, data_atendimento) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$cliente_id, $tecnico_id, $tipo_chamado_id, $descricao, $data_atendimento]);

        return true;
    } catch (PDOException $e) {
        error_log("Erro ao registrar atendimento: " . $e->getMessage());
        return false;
    }
}
?>
