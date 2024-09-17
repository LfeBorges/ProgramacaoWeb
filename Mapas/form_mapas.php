<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Mapas</title>
</head>
<body>
    
    <form action="" method="POST">
        <?php for($i=1; $i<=10; $i++): ?>
            <input type="text" name="nomes[]" placeholder="Valor <?= $i ?>" />
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SEVER['REQUEST_METHOD'] == "POST"){
            try{
                $valores = $_POST['nomes'];
                foreach($valores as $chave => $valor)
                    echo "<p>$chave : $valor </p>";
            }catch (Exception $e){
                echo  $e->getMassage();
            }
            $valores = $POST['nomes'];
        }
    ?>
</body>
</html>