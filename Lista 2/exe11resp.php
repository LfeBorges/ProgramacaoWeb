<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Lista II</title>
</head>

<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$raio = (float) $_POST['raio'];

			$perimetro = 2 * (pi() * $raio);

			echo "<p> O Perimetro do circulo é $perimetro</p>";
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	?>
</body>

</html>