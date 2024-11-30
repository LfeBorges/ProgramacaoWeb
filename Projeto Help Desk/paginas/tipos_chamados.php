<?php
require_once 'cabecalho.php';
require_once 'navbar.php';
require_once '../funcoes/tipos_chamados.php';


$tipos_chamados = listarTiposChamados();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Chamados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Tipos de Chamados</h1>
    <a href="novo_tipo_chamado.php" class="btn btn-success mb-3">Novo Tipo de Chamado</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Criado Em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipos_chamados as $tipo): ?>
                <tr>
                    <td><?php echo $tipo['id']; ?></td>
                    <td><?php echo $tipo['descricao']; ?></td>
                    <td><?php echo $tipo['criado_em']; ?></td>
                    <td>
                        <a href="editar_tipo_chamado.php?id=<?php echo $tipo['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="excluir_tipo_chamado.php?id=<?php echo $tipo['id']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
