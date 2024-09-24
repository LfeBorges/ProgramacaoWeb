<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ListaIII</title>
</head>

<body>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		try {
			$numero = (int) $_POST['valor'];
			
			echo "<h3>Tabuada do número $numero:</h3>";
			echo "<ul class='list-group'>"; 

			for ($i = 1; $i <= 10; $i++) {
				$resultado = $numero * $i;
				echo "<li class='list-group-item'>$numero x $i = $resultado</li>";
			}

			echo "</ul>"; 
		} catch (Exception $e) {
			echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
		}
	}
	?>
</body>

</html>