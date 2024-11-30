<?php

session_start();

require_once 'navbar.php';
require_once '../funcoes/tipos_chamados.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Escolha uma das opções abaixo para gerenciar o sistema.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">Gerencie os dados dos clientes do sistema.</p>
                    <a href="clientes.php" class="btn btn-primary">Ver Clientes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Técnicos</h5>
                    <p class="card-text">Gerencie os dados dos técnicos.</p>
                    <a href="tecnicos.php" class="btn btn-primary">Ver Técnicos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chamados</h5>
                    <p class="card-text">Gerencie os chamados de suporte técnico.</p>
                    <a href=".php" class="btn btn-primary">Ver Chamados</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
