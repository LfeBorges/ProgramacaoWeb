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
	function validarData(int $day, int $month, int $year): string
	{
		if (checkdate($month, $day, $year)) {
			return 'Essa data é válida!';
		} else {
			return 'Essa data é inválida.';
		}
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$day = (int) $_POST['day'];
			$month = (int) $_POST['month'];
			$year = (int) $_POST['year'];

			$mensagem = validarData($day, $month, $year);
		} catch (Exception $e) {
			$mensagem = 'Erro: ' . $e->getMessage();
		}
	}
	?>
</body>

</html>