<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Lista III</title>
</head>

<body>
	<h1>Resposta exe 2</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		try {
			$valor1 = (float) $_POST['valor1'];
			$valor2 = (float) $_POST['valor2'];

			$resultado = $valor1 + $valor2;
			if ($valor1 == $valor2) {
				$resultado = $resultado * 3;
				return "<p>O resultado é de  $resultado e os dois valores são iguais </p>";
			} else {
				echo "<p>O resultado é de  $resultado </p>";
			}
		} catch (Exception $e) {
			echo "Erro" . $e->getMessage();
		}
	}

	?>
</body>

</html>