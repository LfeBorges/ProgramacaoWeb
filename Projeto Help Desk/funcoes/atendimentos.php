<?php
require_once('../config/bancodedados.php');

function registrarAtendimento(int $clienteId, int $tecnicoId, int $tipoChamadoId, string $descricao, string $dataAtendimento): bool {
    $pdo = getConexao();
    $stament = $pdo->prepare("INSERT INTO atendimentos (cliente_id, tecnico_id, tipo_chamado_id, descricao, data_atendimento) VALUES (?, ?, ?, ?, ?)");
    return $stament->execute([$clienteId, $tecnicoId, $tipoChamadoId, $descricao, $dataAtendimento]);
}


require_once '../config/bancodedados.php';

function listarAtendimentos() {
    $pdo = getConexao();
    
    try {
        // Realiza a junção entre as tabelas e retorna os dados de todas as colunas necessárias
        $sql = "
            SELECT 
                atendimentos.id, 
                clientes.nome AS cliente_nome, 
                tecnicos.nome AS tecnico_nome, 
                tipos_chamados.descricao AS tipo_chamado, 
                atendimentos.descricao, 
                atendimentos.data_atendimento
            FROM atendimentos
            JOIN clientes ON atendimentos.cliente_id = clientes.id
            JOIN tecnicos ON atendimentos.tecnico_id = tecnicos.id
            JOIN tipos_chamados ON atendimentos.tipo_chamado_id = tipos_chamados.id
        ";
        
        $stmt = $pdo->query($sql);
        $atendimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $atendimentos;
    } catch (PDOException $e) {
        error_log("Erro ao listar atendimentos: " . $e->getMessage());
        return [];
    }
}



?>
