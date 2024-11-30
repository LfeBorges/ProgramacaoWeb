<?php
session_start();
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/atendimentos.php';
require_once '../funcoes/clientes.php';
require_once '../funcoes/tecnicos.php';
require_once '../funcoes/tipos_chamados.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redireciona se o usuário não estiver logado
    exit();
}

// Buscando dados para preencher os selects
$clientes = listarClientes(); // Função que retorna os clientes
$tecnicos = listarTecnicos(); // Função que retorna os técnicos
$tipos_chamados = listarTiposChamados(); // Função que retorna os tipos de chamados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente_id = $_POST['cliente_id'];
    $tecnico_id = $_POST['tecnico_id'];
    $tipo_chamado_id = $_POST['tipo_chamado_id'];
    $descricao = $_POST['descricao'];
    $data_atendimento = $_POST['data_atendimento'];

    // Chama a função que insere o atendimento no banco de dados
    $resultado = registrarAtendimento($cliente_id, $tecnico_id, $tipo_chamado_id, $descricao, $data_atendimento);

    if ($resultado) {
        header("Location: atendimentos.php"); // Redireciona para a página de atendimentos após sucesso
        exit();
    } else {
        $erro = "Erro ao registrar atendimento.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Atendimento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3>Registrar Atendimento</h3>

    <?php if (!empty($erro)) : ?>
        <div class="alert alert-danger"><?= $erro; ?></div>
    <?php endif; ?>

    <form method="POST" action="registrar_atendimento.php">
        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="form-select" required>
                <option value="">Selecione um Cliente</option>
                <?php foreach ($clientes as $cliente) : ?>
                    <option value="<?= $cliente['id']; ?>"><?= $cliente['nome']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="tecnico_id" class="form-label">Técnico</label>
            <select name="tecnico_id" id="tecnico_id" class="form-select" required>
                <option value="">Selecione um Técnico</option>
                <?php foreach ($tecnicos as $tecnico) : ?>
                    <option value="<?= $tecnico['id']; ?>"><?= $tecnico['nome']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="tipo_chamado_id" class="form-label">Tipo de Chamado</label>
            <select name="tipo_chamado_id" id="tipo_chamado_id" class="form-select" required>
                <option value="">Selecione o Tipo de Chamado</option>
                <?php foreach ($tipos_chamados as $tipo) : ?>
                    <option value="<?= $tipo['id']; ?>"><?= $tipo['descricao']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="data_atendimento" class="form-label">Data do Atendimento</label>
            <input type="datetime-local" name="data_atendimento" id="data_atendimento" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Atendimento</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
