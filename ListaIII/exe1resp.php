<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Resposta Exe 1</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $menor_valor = PHP_INT_MAX;
            $pos_menor_valor = 0;
            for ($i = 1; $i <= 7; $i++) {
                $valor = $_POST["valor$i"];
                if ($valor < $menor_valor) {
                    $menor_valor = $valor;
                    $pos_menor_valor = $i;
                }
            }
            echo "<p>Menor valor: $menor_valor</p>";
            echo "<p>Posição: $pos_menor_valor</p>";
        } catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>
</body>

</html>