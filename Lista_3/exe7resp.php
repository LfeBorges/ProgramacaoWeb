<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ListaIII</title>
</head>

<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$valor = (float) $_POST['valor'];
			$soma = 0;
			$i = 1;
			while ($i <= $valor) {
				$soma += $i;
				$i++;
			}

			echo "<p>A soma de todos os números de 1 até $valor é: $soma</p>";
		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	?>
</body>

</html>