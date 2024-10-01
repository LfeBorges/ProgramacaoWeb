<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ListaIV</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<main class="container mt-5">
		<h1 class="text-center mb-4">Informe uma Data</h1>
		<form action="exe4resp.php" method="post">
			<div class="row mb-3">
				<div class="col">
					<label for="ano" class="form-label">Informe o dia:</label>
					<input type="number" name="dia" id="dia" class="form-control" placeholder="1-31" required>
				</div>
				<div class="col">
					<label for="ano" class="form-label">Informe o mês:</label>
					<input type="number" name="mês" id="mês" class="form-control" placeholder="1-12" required>
				</div>
				<div class="col">
					<label for="ano" class="form-label">Informe o ano:</label>
					<input type="number" name="ano" id="ano" class="form-control" placeholder="Ex: 2012" required>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button type="submit" class="btn btn-primary">
						Enviar
					</button>
				</div>
			</div>
		</form>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>