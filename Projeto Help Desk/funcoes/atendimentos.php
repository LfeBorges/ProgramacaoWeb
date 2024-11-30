<?php
require_once('../config/bancodedados.php');

function registrarAtendimento(int $clienteId, int $tecnicoId, int $tipoChamadoId, string $descricao, string $dataAtendimento): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("INSERT INTO atendimentos (cliente_id, tecnico_id, tipo_chamado_id, descricao, data_atendimento) VALUES (?, ?, ?, ?, ?)");
    return $stament->execute([$clienteId, $tecnicoId, $tipoChamadoId, $descricao, $dataAtendimento]);
}

function listarAtendimentos(): array {
    $pdo = getConexao();
    $stament = $pdo->query("
        SELECT 
            a.id, 
            c.nome AS cliente, 
            t.nome AS tecnico, 
            tc.descricao AS tipo_chamado, 
            a.descricao, 
            a.data_atendimento 
        FROM atendimentos a
        JOIN clientes c ON a.cliente_id = c.id
        JOIN tecnicos t ON a.tecnico_id = t.id
        JOIN tipos_chamados tc ON a.tipo_chamado_id = tc.id
        ORDER BY a.data_atendimento DESC
    ");
    return $stament->fetchAll();
}
?>
