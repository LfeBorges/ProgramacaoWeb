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
	function validarData(int $dia, int $mes, int $ano): string
	{
		if (checkdate($mes, $dia, $ano)) {
			return 'Essa data é válida!';
		} else {
			return 'Essa data é inválida.';
		}
	}

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$dia = (int) $_POST['Dia'];
			$mes = (int) $_POST['Mes'];
			$ano = (int) $_POST['Ano'];

			$mensagem = validarData($dia, $mes, $ano);
		} catch (Exception $e) {
			$mensagem = 'Erro: ' . $e->getMessage();
		}
	}
	?>
</body>

</html>