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

			if ($valor > 0) {
				for ($i = 1; $i <= $valor; $i++) {
					echo "<p>$i</p>";
				}
			} else {
				echo "<p>Por favor, insira um valor maior que 0.</p>";
			}
		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		}
	}
	?>
</body>

</html>