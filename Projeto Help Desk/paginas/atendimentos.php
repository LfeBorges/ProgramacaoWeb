<?php
session_start();
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/atendimentos.php'; 
require_once '../funcoes/clientes.php'; 
require_once '../funcoes/tecnicos.php'; 
require_once '../funcoes/tipos_chamados.php'; 

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); 
    exit();
}


$atendimentos = listarAtendimentos(); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimentos Registrados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h3>Atendimentos Registrados</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Técnico</th>
                <th>Tipo de Chamado</th>
                <th>Descrição</th>
                <th>Data de Atendimento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atendimentos as $atendimento) : ?>
                <tr>
                    <td><?= $atendimento['id']; ?></td>
                    <td><?= $atendimento['cliente_nome']; ?></td>
                    <td><?= $atendimento['tecnico_nome']; ?></td>
                    <td><?= $atendimento['tipo_chamado']; ?></td>
                    <td><?= $atendimento['descricao']; ?></td>
                    <td><?= $atendimento['data_atendimento']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
