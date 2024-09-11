<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Lista III</title>
</head>

<body>
	<h1>Respota exe 3</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		try {
			$valorA = (float) $_POST['valorA'];
			$valorB = (float) $_POST['valorB'];

			if ($valorA == $valorB) {
				echo "Os valores são iguais: $valorA";
			} else {
				if ($valorA < $valorB) {
					echo "$valorA $valorB";
				} else {
					echo "$valorB $valorA";
				}
			}
		} catch (Exception $e) {
			echo "Erro" . $e->getMessage();
		}
	}

	?>
</body>

</html>