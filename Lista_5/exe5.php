<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="container mb-3">
                <label class="form-label">Informe o título e a quantidade do livro <?= $i + 1 ?>:</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="titulos[]" placeholder="Título" required>
                    </div>
                    <div class="col">
                        <input type="number" name="quantidade[]" placeholder="Quantidade" required>
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
                $titulos = $_POST['titulos'];
                $quantidades = $_POST['quantidade'];
                $livros = [];

                for ($i = 0; $i < count($titulos); $i++) {
                    $livros[$titulos[$i]] = $quantidades[$i];

                    
                    if ($quantidades[$i] < 5) {
                        echo "<div class='container text-warning'>Quantidade do livro '{$titulos[$i]}' é baixa!</div>";
                    }
                }

                
                ksort($livros);

                
                echo "<div class='container mt-3'><h3>Livros:</h3>";
                foreach ($livros as $titulo => $quantidade) {
                    echo "<p>Título: {$titulo}, Quantidade em estoque: {$quantidade}</p>";
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
