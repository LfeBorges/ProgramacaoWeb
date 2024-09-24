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
	function ArredondarNumero(float $numero): float
	{
		return round($numero);
	}
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		try {
			$valor = (float)$_POST['valor'];
			$valorArredondado = ArredondarNumero($valor);
			
			echo "O número arredondado é: {$valorArredondado}";
		} catch (Exception $e) {
			echo "ERRO: " . $e->getMessage();
		}
	}
	?>
    ?>
</body>
</html>