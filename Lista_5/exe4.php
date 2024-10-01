<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="container mb-3">
                <label class="form-label">Informe o nome e o preço do item <?= $i + 1 ?>:</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome" required>
                    </div>
                    <div class="col">
                        <input type="number" step="0.01" name="precos[]" placeholder="Preço" required>
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
                $precos = $_POST['precos'];
                $itens = [];

                for ($i = 0; $i < count($nomes); $i++) {
                    $precoComImposto = $precos[$i] * 1.15; 
                    $itens[$nomes[$i]] = number_format($precoComImposto, 2, ',', '.');
                }

                
                asort($itens);

                
                echo "<div class='container mt-3'><h3>Itens:</h3>";
                foreach ($itens as $nome => $preco) {
                    echo "<p>Nome: {$nome}, Preço com imposto: R$ {$preco}</p>";
                }
                echo "</div>";

            } catch (Exception $e) {
                echo "<div class='container mt-3 text-danger'>Erro: " . $e->getMessage() . "</div>";
            }
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
