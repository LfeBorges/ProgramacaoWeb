<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercício 1</title>
</head>

<body>
    <h1 class="ms-5 mt-5">Exercício 1</h1>
    <form action="exe1resp.php" method="post" class="m-5">
        <div class="row">
            <div class="col">
                <label for="valor1" class="form-label">Informe o valor 1: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="form-label">Informe o valor 2: </label>
                <input type="number" name="valor2" id="valor2" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary mt-3">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</body>

</html>