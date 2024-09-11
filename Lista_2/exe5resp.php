<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Lista II</title>
</head>

<body>
	<h1>Resposta do exercicio 5</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$nota1 = (float) $_POST['nota1'];
			$nota2 = (float) $_POST['nota2'];
			$nota3 = (float) $_POST['nota3'];

			$media = ($nota1 + $nota2 + $nota3) / 3;

			echo "<p> A media deste aluno é $media </p>";
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}



	?>
</body>

</html>