<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="container">
                <div class="row mb-3">
                    <label class="form-label">Contato <?= $i ?></label>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome" required>
                    </div>
                    <div class="col">
                        <input type="tel" name="telefones[]" placeholder="Número de Telefone" required>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        <div class="container">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $nomes = $_POST['nomes'];
                $telefones = $_POST['telefones'];
                $contatos = [];

                foreach ($nomes as $key => $nome) {
                    $telefone = $telefones[$key];
                    if (!isset($contatos[$nome]) && !in_array($telefone, $contatos)) {
                        $contatos[$nome] = $telefone;
                    }
                }
            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
