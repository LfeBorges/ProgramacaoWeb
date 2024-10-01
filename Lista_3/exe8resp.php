<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado</title>
</head>

<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		try {
			$numero = (int)$_POST['valor1'];

			if ($numero > 0) {
				echo "<h2>Contagem regressiva:</h2>";

				do {
					echo $numero . "<br>";
					$numero--;
				} while ($numero >= 1);
			} else {
				echo "<h3>Por favor, insira um número positivo.</h3>";
			}
		} catch (Exception $e) {
			echo "<p>Erro: " . $e->getMessage() . "</p>";
		}
	} else {
		echo "<p>Por favor, use o formulário para enviar um valor.</p>";
	}
	?>
</body>

</html>