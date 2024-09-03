<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    
    function soma(int $a, int $b): int {
        return $a + $b;
    }
    function subtracao(int $a, int $b): int {
        echo "Subtração: ".($a - $b)."</p>";
    }
    function saudacao(string $nome = "Visitante"): void {
        echo"<p>Olá $nome!</p>";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        try
        {
            $valor1 = (int) $_POST["valor1"] ?? 0;
            $valor2 = (int) $_POST["valor2"];
            $soma = soma($valor1, $valor2);
            echo"<p>Soma: $soma</p>"
            $subtracao($valor1, $valor2);
            saudacao();
            saudacao("Vasco");
        }
        catch(Exception $e)
        {
            echo "ERRO" . $e ->getMessage();
        }
    }
    ?>
</body>
</html>