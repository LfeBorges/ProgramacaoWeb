<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Document</title>
</head>

<body>
	<h1>Resposta do exercicio 10</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$largura = (float) $_POST['largura'];
			$altura = (float) $_POST['altura'];

			$perimetro = 2 * ($largura + $altura);

			echo "<p> O Perimetro do retangulo é $perimetro</p>";
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	?>
</body>

</html>