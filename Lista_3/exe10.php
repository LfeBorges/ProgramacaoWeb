<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tabuada</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Calculadora de Tabuada</h1>
        
        <form method="POST" action="" class="mb-4">
            <div class="form-group">
                <label for="valor">Digite um número inteiro:</label>
                <input type="number" name="valor" id="valor" class="form-control" required min="0" step="1">
            </div>
            <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
        </form>
	</div>
</body>
</html>