<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="container mb-3">
                <label class="form-label">Informe o código, nome e preço do produto <?= $i + 1 ?>:</label>
                <div class="row">
                    <div class="col">
                        <input type="number" name="codigos[]" placeholder="Código" required>
                    </div>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome" required>
                    </div>s
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
                $codigos = $_POST['codigos'];
                $nomes = $_POST['nomes'];
                $precos = $_POST['precos'];
                $produtos = [];

                for ($i = 0; $i < count($codigos); $i++) {
                    $preco = $precos[$i];

                    
                    if ($preco > 100) {
                        $preco *= 0.9; 
                    }

                    $produtos[$codigos[$i]] = [
                        'nome' => $nomes[$i],
                        'preco' => number_format($preco, 2, ',', '.')
                    ];
                }

                
                $produtosOrdenados = [];
                foreach ($produtos as $codigo => $produto) {
                    $produtosOrdenados[$produto['nome']] = [
                        'codigo' => $codigo,
                        'preco' => $produto['preco']
                    ];
                }
                ksort($produtosOrdenados); 

                echo "<div class='container mt-3'><h3>Produtos:</h3>";
                foreach ($produtosOrdenados as $nome => $detalhes) {
                    echo "<p>Código: {$detalhes['codigo']}, Nome: {$nome}, Preço: R$ {$detalhes['preco']}</p>";
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
