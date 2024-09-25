<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ListaIV</title>
</head>

<body>
	<?php
	function calcularDiferencaDatas(string $data1, string $data2): int
	{
		$timestamp1 = strtotime($data1);
		$timestamp2 = strtotime($data2);

		return abs(($timestamp2 - $timestamp1) / (60 * 60 * 24));
	}

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		try {
			$data1 = (string)$_POST['data1'];
			$data2 = (string)$_POST['data2'];

			$diferenca = calcularDiferencaDatas($data1, $data2);
			echo "A diferença entre as duas datas é de {$diferenca} dias.";
		} catch (Exception $e) {
			echo "Erro: " . $e->getMessage();
		}
	}

	?>

</body>

</html>