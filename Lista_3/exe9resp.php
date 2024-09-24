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
			$numero = (int) $_POST['valor'];
			$fatorial = 1;

			for ($i = 1; $i <= $numero; $i++) {
				$fatorial *= $i;
			}
		} catch (Exception $e) {
			echo "Erro" . $e->getMessage();
		}
	}
	?>
</body>

</html>