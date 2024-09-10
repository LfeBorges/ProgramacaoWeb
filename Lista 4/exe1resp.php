<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Listva IV</title>
</head>
<body>
    <main class="container">
        <?php
            function calcularCaracteres(string $palavra):int{
             return strlen($palavra);   
            }
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                try{
                    $palavra = (string) $_POST['palavra'];
                    echo "<p>A palavra tem ".calcularCaracteres($palavra). "caracteres(s)!</p>";
                }catch (Exception $e) {
                    echo "ERRO: ".$e->getMessage(); 

                }
            }
        ?>
</body>
</html>