<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista III</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<h1>Exercicio 3</h1>
	<form action="exe3resp.php" method="post" class="m-5">
		<div class="row">
			<div class="col">
				<label for="valorA" class="form-label">Valor A: </label>
				<input type="number" name="valor1" id="valor1" class="form-control">
			</div>
			<div class="col">
				<label for="valorB" class="form-label">Valor B: </label>
				<input type="number" name="valor2" id="valor2"class="form-control">
			</div>
		</div>
		<div class="row ">
			<div class="col">
				<button type="submit" class="btn btn-danger mt-3">Enviar</button>
			</div>
		</div>
	</form>
</body>

</html>