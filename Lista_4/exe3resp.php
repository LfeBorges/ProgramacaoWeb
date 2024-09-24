<?php

declare(strict_types=1);

function verificar(string $frase, string $palavra): string
{
	if (strpos($frase, $palavra) !== false) {
		return "Palavra '{$palavra}' presente em '{$frase}'";
	} else {
		return "A palavra '{$palavra}' não está presente em '{$frase}'";
	}
}

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$palavra1 = $_POST['palavra1'] ?? '';
	$palavra2 = $_POST['palavra2'] ?? '';

	if (!empty($palavra1) && !empty($palavra2)) {
		$resultado = verificar($palavra1, $palavra2);
	} else {
		$resultado = "Por favor, preencha todos os campos.";
	}
}
