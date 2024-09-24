<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>ListaIV</title>
</head>

<body>
	<?php
	function calcularRaizQuadrada(float $valor): float
	{
		if ($valor < 0) {
			throw new Exception("O valor não deve ser negativo.");
		}

		return sqrt($valor);
	}

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		try {
			$valor = (float)$_POST['valor'];

			$resultado = calcularRaizQuadrada($valor);

			echo "A raiz desse número é: {$resultado}";
		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	?>
</body>

</html>