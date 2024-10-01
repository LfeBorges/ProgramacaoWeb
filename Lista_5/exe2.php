<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="container">
                <div class="row mb-3">
                    <label class="form-label">Aluno <?= $i ?></label>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Nome" required>
                    </div>
                    <div class="col">
                        <input type="number" name="nota1[]" placeholder="Nota 1" step="0.01" required>
                    </div>
                    <div class="col">
                        <input type="number" name="nota2[]" placeholder="Nota 2" step="0.01" required>
                    </div>
                    <div class="col">
                        <input type="number" name="nota3[]" placeholder="Nota 3" step="0.01" required>
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
                $notas1 = $_POST['nota1'];
                $notas2 = $_POST['nota2'];
                $notas3 = $_POST['nota3'];
                $alunos = [];

                foreach ($nomes as $chaves => $nome) {
                    $media = ($notas1[$chaves] + $notas2[$chaves] + $notas3[$chaves]) / 3;
                    $alunos[$nome] = $media;
                }

                arsort($alunos); // Ordena pela média (do maior para o menor)

                echo "<div class='container mt-3'><h5>Alunos e suas Médias:</h5><ul>";
                foreach ($alunos as $nome => $media) {
                    echo "<li>Nome: $nome - Média: " . number_format($media, 2) . "</li>";
                }
                echo "</ul></div>";

            } catch (Exception $e) {
                echo "Erro: " . $e->getMessage();
            }
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
