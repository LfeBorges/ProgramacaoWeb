<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Gerenciador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li class="nav-item"><a class="nav-link" href="clientes.php">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="tecnicos.php">Técnicos</a></li>
                    <li class="nav-item"><a class="nav-link" href="tipos_chamados.php">Tipos de Chamados</a></li>
                    <li class="nav-item"><a class="nav-link" href="atendimentos.php">Atendimentos</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Sair</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
