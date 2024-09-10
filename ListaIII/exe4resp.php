<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Lista III</title>
</head>

<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$valor = (float) $_POST['valor'];
			if ($valor > 100) {
				$desconto = $valor * 0.15;
				$novo_valor = $valor - $desconto;
				echo "O novo valor é de $novo_valor";
			}
		} catch (Exception $e) {
			echo "Erro" . $e->getMessage();
		}
	}

	?>
</body>

</html>