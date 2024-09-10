<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Document</title>
</head>

<body>
	<h1>Resposta do Exercicio 14</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$kM = (float) $_POST['kM'];

			$milhas = $kM * 0.621371;

			echo "<p> Em milhas dá $milhas </p>";
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	?>
</body>

</html>